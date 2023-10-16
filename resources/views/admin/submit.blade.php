@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Contact Us</h1>

            <form method="post" action="{{ route('/submit') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="organization">Organization</label>
                    <input type="text" id="organization" name="organization" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" class="form-control" rows="7" required></textarea>
                </div>

                <button type="submit" name="save" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
