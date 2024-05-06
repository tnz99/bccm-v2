@extends('panel.layouts.app')

@section('content')
<!-- <div class="pagetitle">
    <h1>Add New Admin </h1>
</div> -->


<section class="section profile">
    <div class="row">

        <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                <!-- Add id attribute to the img tag -->
                <img id="profileImagePreview"
                    src="{{ $user->profile_image ? asset('images/profiles/' . $user->profile_image) : asset('assets/img/profile-img.jpg') }}"
                    alt="Profile" class="rounded-circle">
                <h2>{{ $user->name }}</h2> <!-- Assuming the name field exists in your user model -->
                <!-- <h3>{{ $user->role_id }}</h3>
                <h3>{{ $user->role_name }}</h3> -->
            </div>
        </div>

        <div>

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#profile-overview">Overview</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                Profile</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab"
                                data-bs-target="#profile-change-password">Change Password</button>
                        </li>
                    </ul>

                    <div class="tab-content pt-2">
                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">Profile Details</h5>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                <div class="col-lg-9 col-md-8">{{ $user->name }}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Role</div>
                                <div class="col-lg-9 col-md-8">
                                    @if($user->role_name)
                                    {{ $user->role_name }}
                                    @else
                                    <span class="text-muted">No role selected</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8">{{$user->email}}</div>
                            </div>
                        </div>


                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                            <!-- Profile Edit Form -->
                            <form action="{{ route('profile.edit') }}" method="post" enctype="multipart/form-data"
                                onsubmit="previewProfileImage()">
                                @csrf
                                <div class="row mb-3">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
                                        Image</label>
                                    <div class="col-md-8 col-lg-9">
                                        <!-- Add onchange event to the file input -->
                                        <input type="file" name="profileImage" id="profileImageInput" accept="image/*"
                                            onchange="previewProfileImage(this)">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="fullName" type="text" class="form-control" id="fullName"
                                            value="{{ $user->name }}">
                                    </div>
                                </div>

                                @if (Auth::user()->role_id == 1) {{-- Check if the user is admin --}}
                                <div class="row mb-3">
                                    <label for="role" class="col-md-4 col-lg-3 col-form-label">Role</label>
                                    <div class="col-md-8 col-lg-9">
                                        <select class="form-select" name="role_id" required>
                                            <option value="">Select</option>
                                            @foreach($getRole as $value)
                                            <option {{ ($user->role_id == $value->id) ? 'selected' : '' }}
                                                value="{{ $value->id }}">{{ $value->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @else
                                <div class="row mb-3">
                                    <label for="role" class="col-md-4 col-lg-3 col-form-label">Role</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" value="{{ $user->role_name }}" readonly>
                                    </div>
                                </div>
                                @endif

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" type="email" class="form-control" id="email"
                                            value="{{ $user->email }}">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form><!-- End Profile Edit Form -->
                        </div>



                        <div class="tab-pane fade pt-3" id="profile-change-password">
                            <!-- Change Password Form -->
                            <form action="{{ route('change.password') }}" method="post"
                                onsubmit="return validatePassword()">
                                @csrf
                                <div class="row mb-3">
                                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current
                                        Password</label>
                                    <div class="col-md-8 col-lg-9 input-group">
                                        <input name="current_password" type="password" class="form-control"
                                            id="currentPassword">
                                        <button type="button" class="btn btn-outline-secondary"
                                            onclick="togglePasswordVisibility('currentPassword')">Show</button>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                        Password</label>
                                    <div class="col-md-8 col-lg-9 input-group">
                                        <input name="new_password" type="password" class="form-control"
                                            id="newPassword">
                                        <button type="button" class="btn btn-outline-secondary"
                                            onclick="togglePasswordVisibility('newPassword')">Show</button>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New
                                        Password</label>
                                    <div class="col-md-8 col-lg-9 input-group">
                                        <input name="new_password_confirmation" type="password" class="form-control"
                                            id="renewPassword">
                                        <button type="button" class="btn btn-outline-secondary"
                                            onclick="togglePasswordVisibility('renewPassword')">Show</button>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                </div>
                            </form><!-- End Change Password Form -->
                        </div>

                        <script>
                        function togglePasswordVisibility(fieldId) {
                            var field = document.getElementById(fieldId);
                            if (field.type === "password") {
                                field.type = "text";
                            } else {
                                field.type = "password";
                            }
                        }

                        function validatePassword() {
                            var currentPassword = document.getElementById("currentPassword").value;
                            var newPassword = document.getElementById("newPassword").value;
                            var renewPassword = document.getElementById("renewPassword").value;

                            if (currentPassword.trim() === "") {
                                alert("Please provide your current password.");
                                return false; // Prevent form submission
                            }

                            if (newPassword.trim() === "") {
                                alert("Please provide a new password.");
                                return false; // Prevent form submission
                            }

                            if (renewPassword.trim() === "") {
                                alert("Please re-enter your new password.");
                                return false; // Prevent form submission
                            }

                            // Regular expression to validate password format
                            var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

                            if (!passwordRegex.test(newPassword)) {
                                alert("New password must contain at least 8 characters, including one uppercase letter, one lowercase letter, one number, and one special character.");
                                return false; // Prevent form submission
                            }

                            if (newPassword !== renewPassword) {
                                alert("New password and re-entered password must match.");
                                return false; // Prevent form submission
                            }

                            return true; // Allow form submission
                        }
                        </script>


                    </div><!-- End Bordered Tabs -->




                </div>
            </div>
        </div>
    </div>
</section>

<script>
function previewProfileImage(input) {
    // Get the selected file input element
    var inputFile = input;

    // Check if any file is selected
    if (inputFile.files && inputFile.files[0]) {
        // Read the selected file as a URL
        var reader = new FileReader();
        reader.onload = function(e) {
            // Set the src attribute of the img tag to the URL of the selected image
            document.getElementById('profileImagePreview').src = e.target.result;
        };
        reader.readAsDataURL(inputFile.files[0]); // Read the file
    }
}

function togglePasswordVisibility(fieldId) {
    var field = document.getElementById(fieldId);
    if (field.type === "password") {
        field.type = "text";
    } else {
        field.type = "password";
    }
}
</script>

@endsection
