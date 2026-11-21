<?php

namespace App\Livewire;

use App\Models\ContactInquiry;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ContactInquiryForm extends Component
{
    public string $name = '';

    public string $organization = '';

    public string $email = '';

    public string $phone = '';

    public string $inquiry_type = 'School Supply / Textbook Order';

    public string $message = '';

    public bool $isSent = false;

    /**
     * @var array<string, string>
     */
    protected array $rules = [
        'name' => 'required|string|min:3',
        'organization' => 'nullable|string',
        'email' => 'required|email',
        'phone' => 'required|string|min:7',
        'inquiry_type' => 'required|string',
        'message' => 'required|string|min:10',
    ];

    public function submit(): void
    {
        $validated = $this->validate();

        ContactInquiry::create($validated);

        $this->isSent = true;
    }

    public function render(): View
    {
        return view('livewire.contact-inquiry-form');
    }
}
