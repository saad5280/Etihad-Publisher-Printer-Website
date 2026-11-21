<?php

namespace App\Livewire;

use App\Models\Quote;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class RequestQuoteForm extends Component
{
    public int $currentStep = 1;

    // Form fields mapped from PDF specification Section 8
    public string $project_classification = 'School Syllabus / Classroom Textbook';

    public ?int $page_count = 128;

    public ?int $desired_print_run = 5000;

    public string $inside_paper = 'Fine Textbook Printing Paper (Standard)';

    public string $cover_finish = 'Heavy Bleach Card Cover Board (Recommended)';

    /** @var array<string, bool> */
    public array $cover_treatments = [
        'Gloss Thermal Lamination' => true,
        'Matte Lamination' => false,
        'Spot UV Title' => true,
    ];

    public string $binding_preference = 'Industrial Perfect Binding (Square Backed)';

    public string $delivery_destination = 'Urdu Bazaar Lahore';

    // Contact Info
    public string $client_name = '';

    public string $institution_name = '';

    public string $email = '';

    public string $phone = '';

    public string $notes = '';

    public bool $isSubmitted = false;

    public ?string $generatedReference = null;

    /**
     * @var array<int, array<string, string>>
     */
    protected array $rulesByStep = [
        1 => [
            'project_classification' => 'required|string',
            'page_count' => 'required|integer|min:8|max:2000',
            'desired_print_run' => 'required|integer|min:100',
        ],
        2 => [
            'inside_paper' => 'required|string',
            'cover_finish' => 'required|string',
            'binding_preference' => 'required|string',
            'delivery_destination' => 'required|string',
        ],
        3 => [
            'client_name' => 'required|string|min:3',
            'institution_name' => 'nullable|string',
            'email' => 'required|email',
            'phone' => 'required|string|min:7',
            'notes' => 'nullable|string',
        ],
    ];

    public function setPageCount(int $count): void
    {
        $this->page_count = $count;
    }

    public function setPrintRun(int $run): void
    {
        $this->desired_print_run = $run;
    }

    public function nextStep(): void
    {
        if (isset($this->rulesByStep[$this->currentStep])) {
            $this->validate($this->rulesByStep[$this->currentStep]);
        }

        if ($this->currentStep < 3) {
            $this->currentStep++;
        }
    }

    public function prevStep(): void
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }

    public function submitQuote(): void
    {
        $this->validate(array_merge(
            $this->rulesByStep[1],
            $this->rulesByStep[2],
            $this->rulesByStep[3]
        ));

        // Generate distinctive Reference Number: EP-YYYYMMDD-RAND
        $refNumber = 'EP-'.date('Ymd').'-'.strtoupper(substr(uniqid(), -4));

        $selectedTreatments = array_keys(array_filter($this->cover_treatments));

        Quote::create([
            'reference_number' => $refNumber,
            'client_name' => $this->client_name,
            'institution_name' => $this->institution_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'project_classification' => $this->project_classification,
            'page_count' => $this->page_count,
            'desired_print_run' => $this->desired_print_run,
            'inside_paper' => $this->inside_paper,
            'cover_finish' => $this->cover_finish,
            'cover_treatments' => $selectedTreatments,
            'binding_preference' => $this->binding_preference,
            'delivery_destination' => $this->delivery_destination,
            'notes' => $this->notes,
            'status' => 'pending',
        ]);

        $this->generatedReference = $refNumber;
        $this->isSubmitted = true;
    }

    public function resetCalculator(): void
    {
        $this->reset([
            'currentStep',
            'isSubmitted',
            'generatedReference',
            'client_name',
            'institution_name',
            'email',
            'phone',
            'notes',
        ]);
        $this->currentStep = 1;
    }

    public function render(): View
    {
        return view('livewire.request-quote-form');
    }
}
