<?php

namespace App\Http\Livewire\Pages\Auth\Bionix;

use App\Models\Bionix\BionixInvoice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegistrasiRoadshow extends Component
{
    use WithFileUploads;

    public $name,
        $school,
        $account_name,
        $account_no,
        $bank_name,
        $nominal,
        $payment_proof,
        $agree;

    public function mount()
    {
        if(date('Y-m-d') > date('Y-m-d',strtotime(Auth::user()->userable->roadshow_school->end_dp)) || date('Y-m-d') != date('Y-m-d',strtotime(Auth::user()->userable->roadshow_school->start_dp))) return abort(403);

            $this->name = Auth::user()->name;
            $this->school = Auth::user()->userable->roadshow_school->school_name;
    }

    public function updatedPaymentProof(){
        $this->validate([
            'payment_proof' =>' image|max:2048',
        ]);
    }

    public function dpSubmit()
    {
        $this->validate([
            'account_name' => 'required',
            'bank_name' => 'required',
            'account_name' => 'required',
            'account_no' => 'required',
            'payment_proof' => 'required|image',
            'nominal' =>  'required|integer'
        ]);

        if (!$this->agree) {
            $this->errorMessage = 'Tolong setujui syarat dan ketentuan';
            return;
        }

        Storage::disk('public')->makeDirectory('pembayaran_dp');
        $name = date('YmdHis') . '_DP_BIONIX_' . $this->name . '.' . $this->payment_proof->getClientOriginalExtension();
        $payment_proof_path = 'pembayaran_dp/' . $name;
        $resized_image = (new ImageManager())
            ->make($this->payment_proof)
            ->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode($this->payment_proof->getClientOriginalExtension());

        Storage::disk('public')
            ->put(
                $payment_proof_path,
                $resized_image->__toString()
            );

        BionixInvoice::create([
            'member_id' => Auth::user()->userable->id,
            'account_name' => $this->account_name,
            'bank_name' => $this->bank_name,
            'account_name'=> $this->account_name,
            'account_no' => $this->account_no,
            'payment_proof' => $payment_proof_path,
            'nominal' => $this->nominal
        ]);
        return redirect(route('bionix.pembayaran-success'));
    }


    public function render()
    {
        return view('livewire.pages.auth.bionix.registrasi-roadshow')->layout('layouts.auth-bionix');
    }
}
