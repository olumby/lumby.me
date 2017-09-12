@extends('_layouts.master')

@section('body')
    <div class="mb-3">
        <h3 class="text-normal text-xxl">Oliver Lumby</h3>
        <p>Software developer from Valencia, Spain. Building a platform for animal shelters.</p>
    </div>

    <div class="mb-3" style="display: none">
        <h3 class="text-xl text-thin">Recent Projects</h3>
        <ul class="list-no-style">
            <li class="ml-1 mb-05"><a href="https://radars.lumby.me" target="_blank">RadarsVLC</a> <span class="color-dark-grey">- where the mobile police radar is today.</span></li>
            <li class="ml-1 mb-05"><a href="https://camaras.lumby.me" target="_blank">CamarasVLC</a> <span class="color-dark-grey">- view the traffic cameras in and around Valencia.</span></li>
        </ul>
    </div>

    <div class="divider"></div>

    <div class="mb-4 mt-3">
        <ul class="list-no-style">
            @foreach ($posts->take(10) as $post)
                @if (!$post->draft)
                    <li class="mb-1 pb-1 divide">
                        <p class="mb-05 text-medium text-sm color-dark-grey">{{ date('jS F Y', $post->date) }} &bull; <span class="color-orange">{{ $post->category }}</span></p>
                        <a class="text-xl text-thin" href="{{ $post->getPath() }}">{{ $post->title }}</a>
                        <p class="mt-05 mb-05 text-md color-grey">{{ $post->description }}</p>
                        <a class="color-blue text-sm" href="{{ $post->getPath() }}">See More</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
    <div class="mb-4">
        <ul class="list-no-style list-horizontal">
            <li><a class="no-underline" href="https://twitter.com/cmdsft">
                <svg class="fill-light" width="26" height="26" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z"/>
                </svg>
            </a></li>
            <li><a class="no-underline" href="https://github.com/olumby">
                <svg class="fill-light" width="26" height="26" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5q0 251-146.5 451.5t-378.5 277.5q-27 5-40-7t-13-30q0-3 .5-76.5t.5-134.5q0-97-52-142 57-6 102.5-18t94-39 81-66.5 53-105 20.5-150.5q0-119-79-206 37-91-8-204-28-9-81 11t-92 44l-38 24q-93-26-192-26t-192 26q-16-11-42.5-27t-83.5-38.5-85-13.5q-45 113-8 204-79 87-79 206 0 85 20.5 150t52.5 105 80.5 67 94 39 102.5 18q-39 36-49 103-21 10-45 15t-57 5-65.5-21.5-55.5-62.5q-19-32-48.5-52t-49.5-24l-20-3q-21 0-29 4.5t-5 11.5 9 14 13 12l7 5q22 10 43.5 38t31.5 51l10 23q13 38 44 61.5t67 30 69.5 7 55.5-3.5l23-4q0 38 .5 88.5t.5 54.5q0 18-13 30t-40 7q-232-77-378.5-277.5t-146.5-451.5q0-209 103-385.5t279.5-279.5 385.5-103zm-477 1103q3-7-7-12-10-3-13 2-3 7 7 12 9 6 13-2zm31 34q7-5-2-16-10-9-16-3-7 5 2 16 10 10 16 3zm30 45q9-7 0-19-8-13-17-6-9 5 0 18t17 7zm42 42q8-8-4-19-12-12-20-3-9 8 4 19 12 12 20 3zm57 25q3-11-13-16-15-4-19 7t13 15q15 6 19-6zm63 5q0-13-17-11-16 0-16 11 0 13 17 11 16 0 16-11zm58-10q-2-11-18-9-16 3-14 15t18 8 14-14z"/>
                </svg>
            </a></li>
            <li><a class="no-underline" href="https://digitalocean.com/community/users/oliverlumby">
                <svg class="fill-light" style="transform: scale(0.9)" width="26" height="26" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <path d="M50,100V80.6c20.5,0,36.5-20.4,28.6-42A29,29,0,0,0,61.3,21.4c-21.6-7.8-42,8.1-42,28.6H0C0,17.3,31.6-8.2,65.9,2.5A48.4,48.4,0,0,1,97.5,34.1C108.2,68.4,82.7,100,50,100Z"/><polygon id="_Path_2" data-name="&lt;Path&gt;" class="cls-1" points="50.1 80.7 30.7 80.7 30.7 61.4 30.7 61.4 50.1 61.4 50.1 61.4 50.1 80.7"/><polygon id="_Path_3" data-name="&lt;Path&gt;" class="cls-1" points="30.7 95.5 15.9 95.5 15.9 95.5 15.9 80.7 30.7 80.7 30.7 95.5"/>
                    <path d="M15.9,80.7H3.5V68.3H15.9Z"/>
                </svg>
            </a></li>
        </ul>
    </div>
@endsection
