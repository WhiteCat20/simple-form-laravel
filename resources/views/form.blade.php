<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/form.style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    @include('link.icon')
    <title>newestProject Survey Form</title>
</head>

<body>
    <h1 id="title" class="mt-3">newestProject Survey Form</h1>
    <div class="explanation">
        <p id="description">i created this form to get the certificate</p>
    </div>
    <div class="form-card">
        <form method="POST" action="/admin" id="survey-form">
            @csrf
            <div class="form-list first">
                <label class="mb-2" for="name" id="name-label">Name</label> <br>
                <input type="text" class="mgn" name="name" id="name">
            </div>
            <div class="form-list">
                <label class="mb-2" for="email" id="email-label">Email</label> <br>
                <input type="email" class="mgn" name="email" id="email">
            </div>
            <div class="form-list">
                <label class="mb-2" for="age" id="number-label">Age</label> <br>
                <input type="number" class="mgn" name="age" id="number">
            </div>
            <div class="form-list">
                <label class="mb-2" for="major" id="number-label">Major</label> <br>
                <input type="text" class="mgn" name="major" id="major">
            </div>
            <div class="form-list">
                <label class="mb-2" for="reason">Why did u choose us?</label><br>
                <input type="text" class="mgn" number="5" name="reason" id="reason">
            </div>
            <div class="form-list buttonWrap">
                <button type="submit" id="submit">Submit!</button>
            </div>
        </form>
    </div>
    <a href="/admin" class="admin-button text-center mt-3">
        Admin
    </a>
</body>

</html>
