<h1 class="heading">This IS Test</h1>
Hello , {{$data['name']}}
<div class="page-break"></div>
<img src="https://www.w3schools.com/w3css/img_lights.jpg" alt="">
<a href="{{route('export.pdf')}}">Export</a>

<style>
    .heading {
        color: indigo;
    }

    /*Page Break To Make Page to 2*/
    .page-break {
        page-break-after: always;
    }
</style>
