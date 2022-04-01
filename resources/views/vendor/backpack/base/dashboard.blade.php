@extends(backpack_view('blank'))

@php

Widget::add([
    'type'    => 'div',
    'class'   => 'row',
    'content' => [ // widgets 
        [
            'type'        => 'progress',
            'class'       => 'card text-white bg-primary mb-2',
            'value'       => '11.456',
            'description' => 'Registered users.',
            'progress'    => 57, // integer
            'hint'        => '8544 more until next milestone.',
        ],
        [
            'type'          => 'progress_white',
            'class'         => 'card bg-secondary mb-2',
            'value'         => '11.456',
            'description'   => 'Registered users.',
            'progress'      => 57, // integer
            'progressClass' => 'progress-bar bg-primary',
            'hint'          => '8544 more until next milestone.',
        ],
        [
            'type'        => 'progress',
            'class'       => 'card text-white bg-success mb-2',
            'value'       => '11.456',
            'description' => 'Registered users.',
            'progress'    => 57, // integer
            'hint'        => '8544 more until next milestone.',
        ],
        [
            'type'        => 'progress',
            'class'       => 'card text-white bg-dark mb-2',
            'value'       => '11.456',
            'description' => 'Registered users.',
            'progress'    => 57, // integer
            'hint'        => '8544 more until next milestone.',
        ],
    ]
]);

$widgets['before_content'][] = [
	  'type' => 'div',
	  'class' => 'row',
	  'content' => [ // widgets 
		  	[ 
		        'type' => 'chart',
		        'wrapperClass' => 'col-md-6',
		        // 'class' => 'col-md-6',
		        'controller' => \App\Http\Controllers\Admin\Charts\LatestUsersChartController::class,
				'content' => [
				    'header' => 'New Users Past 7 Days', // optional
				    // 'body' => 'This chart should make it obvious how many new users have signed up in the past 7 days.<br><br>', // optional
					
		    	]
	    	],
	    	[ 
		        'type' => 'chart',
		        'wrapperClass' => 'col-md-6',
		        // 'class' => 'col-md-6',
		        'controller' => \App\Http\Controllers\Admin\Charts\NewEntriesChartController::class,
				'content' => [
				    'header' => 'New Entries', // optional
				    // 'body' => 'This chart should make it obvious how many new users have signed up in the past 7 days.<br><br>', // optional
		    	]
	    	],
    	]
	];


// 

// Widget::add();




@endphp

@section('content')





@endsection