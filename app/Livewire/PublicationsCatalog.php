<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class PublicationsCatalog extends Component
{
    public string $selectedCategory = 'all';

    public string $search = '';

    public bool $preview = false;

    /**
     * @var list<array{
     *     title: string,
     *     urdu_title: string,
     *     class: string,
     *     urdu_class: string,
     *     subject: string,
     *     urdu_subject: string,
     *     category: string,
     *     publisher: string,
     *     urdu_publisher: string,
     *     content: string,
     *     urdu_content: string,
     *     paper_specs: string,
     *     urdu_paper_specs: string,
     *     finishing: string,
     *     urdu_finishing: string,
     *     image: ?string,
     *     from: string,
     *     to: string
     * }>
     */
    public array $publications = [
        [
            'title' => 'Mathematics Grade 4',
            'urdu_title' => 'ریاضی جماعت چہارم',
            'class' => 'Grade 4',
            'urdu_class' => 'چوتھی جماعت',
            'subject' => 'Mathematics',
            'urdu_subject' => 'ریاضی',
            'category' => 'primary',
            'publisher' => 'Punjab Curriculum and Textbook Board, Lahore',
            'urdu_publisher' => 'پنجاب کریکولم اینڈ ٹیکسٹ بک بورڈ، لاہور',
            'content' => 'Grade 4 Mathematics textbook.',
            'urdu_content' => 'چوتھی جماعت کی ریاضی کی درسی کتاب۔',
            'paper_specs' => '',
            'urdu_paper_specs' => '',
            'finishing' => '',
            'urdu_finishing' => '',
            'image' => 'images/books/punjab-mathematics-grade-4.png',
            'from' => '#021070',
            'to' => '#01188f',
        ],
        [
            'title' => 'Urdu Grade 5',
            'urdu_title' => 'اردو جماعت پنجم',
            'class' => 'Grade 5',
            'urdu_class' => 'پانچویں جماعت',
            'subject' => 'Urdu',
            'urdu_subject' => 'اردو',
            'category' => 'primary',
            'publisher' => 'Punjab Curriculum and Textbook Board, Lahore',
            'urdu_publisher' => 'پنجاب کریکولم اینڈ ٹیکسٹ بک بورڈ، لاہور',
            'content' => 'Grade 5 Urdu textbook.',
            'urdu_content' => 'پانچویں جماعت کی اردو کی درسی کتاب۔',
            'paper_specs' => '',
            'urdu_paper_specs' => '',
            'finishing' => '',
            'urdu_finishing' => '',
            'image' => 'images/books/punjab-urdu-class-5.png',
            'from' => '#021070',
            'to' => '#01188f',
        ],
        [
            'title' => 'English Grade 6',
            'urdu_title' => 'انگریزی جماعت ششم',
            'class' => 'Grade 6',
            'urdu_class' => 'چھٹی جماعت',
            'subject' => 'English',
            'urdu_subject' => 'انگریزی',
            'category' => 'middle',
            'publisher' => 'Punjab Curriculum and Textbook Board, Lahore',
            'urdu_publisher' => 'پنجاب کریکولم اینڈ ٹیکسٹ بک بورڈ، لاہور',
            'content' => 'Grade 6 English textbook.',
            'urdu_content' => 'چھٹی جماعت کی انگریزی کی درسی کتاب۔',
            'paper_specs' => '',
            'urdu_paper_specs' => '',
            'finishing' => '',
            'urdu_finishing' => '',
            'image' => 'images/books/punjab-english-grade-6.png',
            'from' => '#021070',
            'to' => '#01188f',
        ],
        [
            'title' => 'General Science Grade 7',
            'urdu_title' => 'جنرل سائنس جماعت ہفتم',
            'class' => 'Grade 7',
            'urdu_class' => 'ساتویں جماعت',
            'subject' => 'General Science',
            'urdu_subject' => 'جنرل سائنس',
            'category' => 'middle',
            'publisher' => 'Punjab Curriculum and Textbook Board, Lahore',
            'urdu_publisher' => 'پنجاب کریکولم اینڈ ٹیکسٹ بک بورڈ، لاہور',
            'content' => 'Grade 7 General Science textbook.',
            'urdu_content' => 'ساتویں جماعت کی جنرل سائنس کی درسی کتاب۔',
            'paper_specs' => '',
            'urdu_paper_specs' => '',
            'finishing' => '',
            'urdu_finishing' => '',
            'image' => 'images/books/punjab-general-science-class-7.png',
            'from' => '#021070',
            'to' => '#01188f',
        ],
        [
            'title' => 'Computer Science Grade 8',
            'urdu_title' => 'کمپیوٹر سائنس جماعت ہشتم',
            'class' => 'Grade 8',
            'urdu_class' => 'آٹھویں جماعت',
            'subject' => 'Computer Science',
            'urdu_subject' => 'کمپیوٹر سائنس',
            'category' => 'middle',
            'publisher' => 'Punjab Curriculum and Textbook Board, Lahore',
            'urdu_publisher' => 'پنجاب کریکولم اینڈ ٹیکسٹ بک بورڈ، لاہور',
            'content' => 'Grade 8 Computer Science textbook.',
            'urdu_content' => 'آٹھویں جماعت کی کمپیوٹر سائنس کی درسی کتاب۔',
            'paper_specs' => '',
            'urdu_paper_specs' => '',
            'finishing' => '',
            'urdu_finishing' => '',
            'image' => 'images/books/punjab-computer-science-grade-8.png',
            'from' => '#021070',
            'to' => '#01188f',
        ],
        [
            'title' => 'Biology Grade IX',
            'urdu_title' => 'حیاتیات جماعت نہم',
            'class' => 'Grade IX',
            'urdu_class' => 'نویں جماعت',
            'subject' => 'Biology',
            'urdu_subject' => 'حیاتیات',
            'category' => 'secondary',
            'publisher' => 'Khyber Pakhtunkhwa Textbook Board, Peshawar',
            'urdu_publisher' => 'خیبر پختونخوا ٹیکسٹ بک بورڈ، پشاور',
            'content' => 'Grade IX Biology textbook.',
            'urdu_content' => 'نویں جماعت کی حیاتیات کی درسی کتاب۔',
            'paper_specs' => '',
            'urdu_paper_specs' => '',
            'finishing' => '',
            'urdu_finishing' => '',
            'image' => 'images/books/kpk-biology-grade-9.png',
            'from' => '#021070',
            'to' => '#01188f',
        ],
        [
            'title' => 'Urdu Grade 7',
            'urdu_title' => 'اردو جماعت ہفتم',
            'class' => 'Grade 7',
            'urdu_class' => 'ساتویں جماعت',
            'subject' => 'Urdu',
            'urdu_subject' => 'اردو',
            'category' => 'middle',
            'publisher' => 'Khyber Pakhtunkhwa Textbook Board, Peshawar',
            'urdu_publisher' => 'خیبر پختونخوا ٹیکسٹ بک بورڈ، پشاور',
            'content' => 'Grade 7 Urdu textbook.',
            'urdu_content' => 'ساتویں جماعت کی اردو کی درسی کتاب۔',
            'paper_specs' => '',
            'urdu_paper_specs' => '',
            'finishing' => '',
            'urdu_finishing' => '',
            'image' => 'images/books/kpk-urdu-grade-7.png',
            'from' => '#021070',
            'to' => '#01188f',
        ],
    ];

    public function mount(): void
    {
        $category = request()->query('cat');

        if (is_string($category) && in_array($category, ['primary', 'middle', 'secondary'], true)) {
            $this->selectedCategory = $category;
        }
    }

    /**
     * @return list<array{
     *     title: string,
     *     urdu_title: string,
     *     class: string,
     *     urdu_class: string,
     *     subject: string,
     *     urdu_subject: string,
     *     category: string,
     *     publisher: string,
     *     urdu_publisher: string,
     *     content: string,
     *     urdu_content: string,
     *     paper_specs: string,
     *     urdu_paper_specs: string,
     *     finishing: string,
     *     urdu_finishing: string,
     *     image: ?string,
     *     from: string,
     *     to: string
     * }>
     */
    public function getFilteredPublicationsProperty(): array
    {
        $books = array_values(array_filter($this->publications, function (array $book): bool {
            $matchesCategory = $this->selectedCategory === 'all' || $book['category'] === $this->selectedCategory;

            $matchesSearch = true;
            if ($this->search !== '') {
                $query = strtolower(trim($this->search));
                $matchesSearch = str_contains(strtolower($book['title']), $query)
                    || str_contains($book['urdu_title'], $query)
                    || str_contains(strtolower($book['subject']), $query)
                    || str_contains($book['urdu_subject'], $query)
                    || str_contains(strtolower($book['publisher']), $query)
                    || str_contains($book['urdu_publisher'], $query)
                    || str_contains(strtolower($book['class']), $query)
                    || str_contains($book['urdu_class'], $query)
                    || str_contains(strtolower($book['content']), $query)
                    || str_contains($book['urdu_content'], $query);
            }

            return $matchesCategory && $matchesSearch;
        }));

        if ($this->preview) {
            return array_slice($books, 0, 4);
        }

        return $books;
    }

    public function filterCategory(string $category): void
    {
        $this->selectedCategory = $category;
    }

    public function render(): View
    {
        return view('livewire.publications-catalog', [
            'books' => $this->filteredPublications,
        ]);
    }
}
