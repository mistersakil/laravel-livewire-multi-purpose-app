<?php

namespace App\Http\Livewire\Backend\Appointments;

use App\Models\Appointment;
use App\Http\Livewire\Backend\BackendComponent;

class AppointmentComponent extends BackendComponent
{
    public function render()
    {
        $models = Appointment::latest()->paginate(10);
        // dd(count($models));
        return view('livewire.backend.appointments.appointment-component', compact('models'))->layoutData(['page_title' => 'Appoitment List']);
    }
}
