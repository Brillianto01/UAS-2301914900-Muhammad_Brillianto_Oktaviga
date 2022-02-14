<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ebook')->insert([
            ['title' => "The Great Gatsby", 'author' => "F. Scott Fitzgerald", 'description' => "The Great Gatsby is a 1925 novel by American writer F. Scott Fitzgerald. Set in the Jazz Age on Long Island, near New York City, the novel depicts first-person narrator Nick Carraway's interactions with mysterious millionaire Jay Gatsby and Gatsby's obsession to reunite with his former lover, Daisy Buchanan"],
            ['title' => "Nineteen Eighty-Four", 'author' => "George Orwel", 'description' => "Nineteen Eighty-Four is a dystopian social science fiction novel and cautionary tale written by English writer George Orwell. It was published on 8 June 1949 by Secker & Warburg as Orwell's ninth and final book completed in his lifetime."],
            ['title' => "The Catcher in the Rye", 'author' => "J. D. Salinger", 'description' => "The Catcher in the Rye is a novel by J. D. Salinger, partially published in serial form in 1945–1946 and as a novel in 1951. It was originally intended for adults but is often read by adolescents for its themes of angst, alienation, and as a critique on superficiality in society. It has been translated widely."],
            ['title' => "The Stranger (L'Étranger)", 'author' => "Albert Camus", 'description' => "The Stranger, also published in English as The Outsider, is a 1942 novella by French author Albert Camus. Its theme and outlook are often cited as examples of Camus' philosophy, absurdism, coupled with existentialism; though Camus personally rejected the latter label"],
            ['title' => "Middlemarch", 'author' => "George Eliot", 'description' => "Middlemarch, A Study of Provincial Life is a novel by the English author Mary Anne Evans, who wrote as George Eliot. It first appeared in eight instalments in 1871 and 1872. Set in Middlemarch, a fictional English Midland town, in 1829 to 1832, it follows distinct, intersecting stories with many characters."],
            ['title' => "East of Eden", 'author' => "John Steinbeck", 'description' => "East of Eden is a novel by American author and Nobel Prize winner John Steinbeck. Published in September 1952, the work is regarded by many to be Steinbeck's most ambitious novel and by Steinbeck himself to be his magnum opus"],
            ['title' => "In Cold Blood", 'author' => "Truman Capote", 'description' => "In Cold Blood is a non-fiction novel by American author Truman Capote, first published in 1966. It details the 1959 murders of four members of the Clutter family in the small farming community of Holcomb, Kansas. "],

        ]);
    }
}
