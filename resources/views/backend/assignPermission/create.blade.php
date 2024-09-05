@extends('backend.dashboard.master')
@section('title')
    Create Assign
@endsection
@section('content')
    <div id="content" class="app-content p-3">
        <div class="head-main d-flex justify-content-between my-3">
            <h3>Assign Permission</h3>
            <a href="{{ route('assignPermission.index') }}" class="btn btn-info "><i class="fas fa-list"></i>Assign Permission
                List</a>
        </div>
        <div class="card">
            <div class="card-header with-btn">
                <div class="card-header-btn">
                    <a href="#" data-toggle="card-collapse" class="btn"><iconify-icon
                            icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                    <a href="#" data-toggle="card-expand" class="btn"><iconify-icon
                            icon="material-symbols-light:fullscreen"></iconify-icon></a>
                    <a href="#" data-toggle="card-remove" class="btn"><iconify-icon
                            icon="material-symbols-light:close-rounded"></iconify-icon></a>
                </div>
            </div>
            <div class="card-body">
                @include('error')
                <form action="{{ route('assignPermission.store') }}" method="post">
                    @csrf
                    <!-- Role Selection -->
                    <div class="mb-3 row">
                        <label for="role_id" class="col-sm-2 col-form-label">Role Name</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="role_id" name="role_id" required>
                                <option selected disabled>Select Role</option>
                                @foreach ($role as $item)
                                    <option value="{{ $item->id }}">{{ $item->roleName }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Permission Checkboxes -->
                    <div class="form-group">
                        <label for="permission">Permissions</label>

                        <!-- Select All Checkbox -->
                        <div class="form-check">
                            <label for="check_permissionAll">All</label>
                            <input type="checkbox" id="check_permissionAll" class="form-check-input" value="1">
                        </div>
                        <hr>

                        <!-- Module and Submodule Permissions -->
                        @foreach ($module as $key => $modules)
                            @foreach ($modules->subModule as $subModule)
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-check">
                                            <label
                                                for="subModule{{ $key }}">{{ $subModule->subModuleName }}</label>
                                            <input type="checkbox" id="{{ $key }}Management"
                                                class="form-check-input"
                                                onclick="checkPermissionByGroup('rol-{{ $key }}-management-checkbox', this)">
                                        </div>
                                    </div>
                                    <div class="col-9 rol-{{ $key }}-management-checkbox">
                                        @foreach ($subModule->permission as $permissions)
                                            <div class="form-check">
                                                <label
                                                    for="permission{{ $permissions->id }}">{{ $permissions->permission }}</label>
                                                <input type="checkbox" name="permission_id[]"
                                                    id="permission{{ $permissions->id }}" class="form-check-input"
                                                    value="{{ $permissions->id }}">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        @endforeach
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-outline-theme">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="hljs-container">
                <pre><code class="xml" data-url="assets/data/form-elements/code-11.json"></code></pre>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <!-- jQuery (required) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Your custom script -->
    <script>
        $(document).ready(function() {
            $('#check_permissionAll').click(function() {
                // If 'All' is checked, check all checkboxes; otherwise, uncheck all
                $('input[type=checkbox]').prop('checked', this.checked);
            });
        });

        function checkPermissionByGroup(className, checkThis) {
            const classCheckBox = $('.' + className + ' input');
            // Check/uncheck all checkboxes in the specific group
            classCheckBox.prop('checked', checkThis.checked);

            // If any group checkbox is unchecked, uncheck the 'All' checkbox
            if (!checkThis.checked) {
                $('#check_permissionAll').prop('checked', false);
            } else {
                // If all group checkboxes are checked, check the 'All' checkbox
                if ($('.form-check-input:not(#check_permissionAll)').length === $(
                        '.form-check-input:not(#check_permissionAll):checked').length) {
                    $('#check_permissionAll').prop('checked', true);
                }
            }
        }
    </script>
@endpush
