(function () {
    /*
    |--------------------------------------------------------------------------
    | Global JavaScript
    |--------------------------------------------------------------------------
    |
    | This section contains custom global scripts accessible to all users.
    | These scripts are loaded globally and are available for use throughout the application.
    | Let's create something amazing!
    |
    */

    // Toggle Password Visibility
    if ($("#togglePassword").length > 0) {
        const togglePassword = document.getElementById("togglePassword");
        const password = document.getElementById("password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type =
                password.getAttribute("type") === "password"
                    ? "text"
                    : "password";
            password.setAttribute("type", type);

            // toggle the icon
            this.classList.toggle("fe-eye-off");
        });
    }

    //Delete Record
    $("table").on("click", ".deleteRecord", function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        let current_object = $(this);
        swal({
            title: "Are you sure you want to delete this record?",
            text: "If you delete this, it will be gone trashed history.",
            icon: "warning",
            type: "warning",
            buttons: ["Cancel", "Yes!"],
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((willDelete) => {
            if (willDelete) {
                let action = current_object.attr("data-action");
                let token = $('meta[name="csrf-token"]').attr("content");
                let id = current_object.attr("data-id");
                let datatable = current_object.attr("data-datatable");
                //console.log(action,token,id);

                $.ajax({
                    type: "POST",
                    url: action,
                    dataType: "JSON",
                    data: {
                        _token: token,
                        _method: "delete",
                        id: id,
                    },
                    success: function (data) {
                        if (data?.status) {
                            if(datatable.length > 0 ||  datatable == false){
                                location.reload();
                            }else{
                                $(".dataTable").DataTable().ajax.reload();
                            }
                            swal({
                                title: "Record Deleted!",
                                text: data?.message,
                                type: "success",
                                timer: 3000,
                            });
                        } else {
                            swal({
                                title: "Oops!",
                                text: data?.message,
                                type: "success",
                                timer: 3000,
                            });
                        }
                    },
                });
            }
        });
    });

    //Force Delete Record
    $("table").on("click", ".deleteForceFullyRecord", function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        let current_object = $(this);
        swal({
            title: "Force Delete",
            text: "Are you sure you want to permanently delete this record?",
            icon: "warning",
            type: "warning",
            buttons: ["Cancel", "Yes!"],
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, force delete it!",
        }).then((willDelete) => {
            if (willDelete) {
                let action = current_object.attr("data-action");
                let token = $('meta[name="csrf-token"]').attr("content");
                let id = current_object.attr("data-id");
                //console.log(action,token,id);

                $.ajax({
                    type: "POST",
                    url: action,
                    dataType: "JSON",
                    data: {
                        _token: token,
                        _method: "delete",
                        id: id,
                    },
                    success: function (data) {
                        if (data?.status) {
                            $(".dataTable").DataTable().ajax.reload();
                            swal({
                                title: "Record Force Deleted!",
                                text: data?.message,
                                type: "success",
                                timer: 3000,
                            });
                        } else {
                            swal({
                                title: "Oops!",
                                text: data?.message,
                                type: "success",
                                timer: 3000,
                            });
                        }
                    },
                });
            }
        });
    });

    // Delete Bulk Record
    $("#bulk_delete").click(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        let current_object = $(this);
        swal({
            title: "Are you sure you want to delete this record?",
            text: "If you delete this, it will be gone trashed history.",
            icon: "warning",
            type: "warning",
            buttons: ["Cancel", "Yes!"],
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((willDelete) => {
            if (willDelete) {
                let action = current_object.attr("data-action");
                let token = $('meta[name="csrf-token"]').attr("content");
                let ids = $("#listAlertCheckbox").val();
                ids = `[${ids}]`;
                ids = JSON.parse(ids);
                //console.log(action,token,id);
                $.ajax({
                    type: "POST",
                    url: action,
                    dataType: "JSON",
                    data: {
                        _token: token,
                        ids: ids,
                    },
                    success: function (data) {
                        if (data?.status) {
                            $(".dataTable").DataTable().ajax.reload();
                            $(".list-alert-close").trigger("click");
                            swal({
                                title: "Records Deleted!",
                                text: data?.message,
                                type: "success",
                                timer: 3000,
                            });
                        } else {
                            swal({
                                title: "Oops!",
                                text: data?.message,
                                type: "success",
                                timer: 3000,
                            });
                        }
                    },
                });
            }
        });
    });

    // Force Delete Bulk Record
    $("#force_bulk_delete").click(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        let current_object = $(this);
        swal({
            title: "Force Delete!",
            text: "Are you sure you want to permanently delete this record?",
            icon: "warning",
            type: "warning",
            buttons: ["Cancel", "Yes!"],
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, force delete it!",
        }).then((willDelete) => {
            if (willDelete) {
                let action = current_object.attr("data-action");
                let token = $('meta[name="csrf-token"]').attr("content");
                let ids = $("#listAlertCheckbox").val();
                ids = `[${ids}]`;
                ids = JSON.parse(ids);
                //console.log(action,token,id);
                $.ajax({
                    type: "POST",
                    url: action,
                    dataType: "JSON",
                    data: {
                        _token: token,
                        ids: ids,
                    },
                    success: function (data) {
                        if (data?.status) {
                            $(".dataTable").DataTable().ajax.reload();
                            $(".list-alert-close").trigger("click");
                            swal({
                                title: "Records Force Deleted!",
                                text: data?.message,
                                type: "success",
                                timer: 3000,
                            });
                        } else {
                            swal({
                                title: "Oops!",
                                text: data?.message,
                                type: "success",
                                timer: 3000,
                            });
                        }
                    },
                });
            }
        });
    });

    // Restore Record
    $("table").on("click", ".restoreRecord", function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        let current_object = $(this);
        swal({
            title: "Restore",
            text: "Are you sure you want to restore this record?",
            icon: "warning",
            type: "warning",
            buttons: ["Cancel", "Yes!"],
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, restore it!",
        }).then((willDelete) => {
            if (willDelete) {
                let action = current_object.attr("data-action");
                let token = $('meta[name="csrf-token"]').attr("content");
                let id = current_object.attr("data-id");
                //console.log(action,token,id);

                $.ajax({
                    type: "POST",
                    url: action,
                    dataType: "JSON",
                    data: {
                        _token: token,
                        _method: "put",
                        id: id,
                    },
                    success: function (data) {
                        if (data?.status) {
                            $(".dataTable").DataTable().ajax.reload();
                            swal({
                                title: "Record Restored!",
                                text: data?.message,
                                type: "success",
                                timer: 3000,
                            });
                        } else {
                            swal({
                                title: "Oops!",
                                text: data?.message,
                                type: "success",
                                timer: 3000,
                            });
                        }
                    },
                });
            }
        });
    });

    // Restore Bulk Record
    $("#restore_bulk_delete").click(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        let current_object = $(this);
        swal({
            title: "Restore Records!",
            text: "Are you sure you want to restore this record?",
            icon: "warning",
            type: "warning",
            buttons: ["Cancel", "Yes!"],
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, restore it!",
        }).then((willDelete) => {
            if (willDelete) {
                let action = current_object.attr("data-action");
                let token = $('meta[name="csrf-token"]').attr("content");
                let ids = $("#listAlertCheckbox").val();
                ids = `[${ids}]`;
                ids = JSON.parse(ids);
                //console.log(action,token,id);
                $.ajax({
                    type: "POST",
                    url: action,
                    dataType: "JSON",
                    data: {
                        _token: token,
                        ids: ids,
                    },
                    success: function (data) {
                        if (data?.status) {
                            $(".dataTable").DataTable().ajax.reload();
                            $(".list-alert-close").trigger("click");
                            swal({
                                title: "Records Restored!",
                                text: data?.message,
                                type: "success",
                                timer: 3000,
                            });
                        } else {
                            swal({
                                title: "Oops!",
                                text: data?.message,
                                type: "success",
                                timer: 3000,
                            });
                        }
                    },
                });
            }
        });
    });

    // Checkbox all check / uncheck
    $("#listCheckboxAll").change(function () {
        //check is checked
        if ($(this).is(":checked")) {
            $(".list-checkbox").trigger("click");
            $(".list-checkbox:checkbox").prop("checked", true); // true
        } else {
            $(".list-alert-close").trigger("click");
            $(".list-checkbox:checkbox").prop("checked", false); // false
        }
    });

    // Alert close
    $(".list-alert-close").click(function (e) {
        $("#list-alert-modal").removeClass("fade-in show");
    });

    // Show list alert
    $("table").on("click", ".list-checkbox ", function (e) {
        $("#list-alert-modal").addClass("fade-in show");
        let ids = [];
        $(".list-checkbox:checked").each(function () {
            ids.push($(this).val());
        });
        $(".list-alert-count").text(ids.length);
        $("#listAlertCheckbox").val(ids.toString());
    });

     })();
