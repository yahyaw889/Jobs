<?php

use App\Models\Employer;
use App\Models\Job;


// test('example', function () {
//     $employer = Employer::factory()->create();
//     $job = Job::factory()->create([
//         'employer_id' => $employer->id
//     ]);
//     expect($job->employer->is($employer)->toBeTrue());

//     // expect(true)->toBeTrue();
// });

test('can run tags', function () {
    $job = Job::factory()->create();

    // $job->tags()->create(['name' => 'Frontend']);
    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
    // expect($job->tags->first()->name)->toBe('Frontend');
});

