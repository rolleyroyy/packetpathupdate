<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    @if (isset($successMessage))
        <p>{{ $successMessage }}</p>
    @else
        <form method="post" action="{{ route('submitform') }}">
            @csrf <!-- Include CSRF token for security -->
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="tel" name="phone" placeholder="Phone">
            <input type="text" name="organization" placeholder="Organization">
            <textarea name="message" placeholder="Message" rows="4" required></textarea>
            <input type="submit" name="save" value="Submit">
        </form>
    @endif
</body>
</html>
