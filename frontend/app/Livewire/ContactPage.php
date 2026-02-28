<?php

namespace App\Livewire;

use Livewire\Component;

class ContactPage extends Component
{
    public string $name = '';
    public string $email = '';
    public string $phone = '';
    public string $subject = '';
    public string $message = '';
    public bool $submitted = false;

    protected function rules()
    {
        return [
            'name' => 'required|min:2|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'nullable|max:20',
            'subject' => 'required|min:2|max:200',
            'message' => 'required|min:10|max:2000',
        ];
    }

    public function submit()
    {
        $this->validate();

        // For now, just mark as submitted (no DB table needed)
        $this->submitted = true;

        // Reset form
        $this->reset(['name', 'email', 'phone', 'subject', 'message']);
    }

    public function render()
    {
        return view('livewire.contact-page')
            ->layout('components.layouts.app', ['title' => 'Contact Us']);
    }
}
