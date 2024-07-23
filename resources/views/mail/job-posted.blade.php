<h2>Congratulations!</h2>

<p>
    Your job {{ $job->title }} is now live on our platform.
</p>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View your job listing</a>
</p>
