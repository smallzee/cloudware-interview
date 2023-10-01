@extends('layouts.user.app')

@push('content')

    <div class="row">
        <div class="col-xxl-12">

            <div class="card border overflow-hidden card-border-warning">
                <div class="card-header">
                    <h6 class="card-title mb-0">{{ $page_title }}</h6>
                </div>
                <div class="card-body">

                    @php

                        $today = new DateTime;
                        $randomAfternoonTime = (clone $today)->setTime(13, 25);
                        $randomNightTime = (clone $today)->add(new DateInterval('P1D'))->setTime(2, 23);

                        // Times relevant to Amsterdam on 2020-09-23.
                        // Sunset happens this evening.
                        $sunsetTime = (clone $today)->setTime(19, 36);
                        // Sunrise happens tomorrow, so add one day.
                        $sunriseTime = (clone $today)->add(new DateInterval('P1D'))->setTime(7, 30);

                        echo "<h6>Sunset at:\n" . $sunsetTime->format('Y-m-d H:i') . "</h6>";
                        echo "<h6><p>Sunrise at:\n" . $sunriseTime->format('Y-m-d H:i') . "</p></h6>";

                        echo "<hr>";
                        echo "<h6><p>Some time in the afternoon (NOT in between sunset/sunrise):\n" . $randomAfternoonTime->format('Y-m-d H:i') . "</p></h6>";
                        echo "<h6>At night (in between sunset/sunrise):\n" . $randomNightTime->format('Y-m-d H:i') . "</h6>";



                    @endphp

                </div>
            </div>
        </div><!-- end col -->
    </div>

@endpush
