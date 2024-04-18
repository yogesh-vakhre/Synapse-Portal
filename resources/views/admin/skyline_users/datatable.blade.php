<script type="text/javascript">
    $(function() {
        let dataUrl;

        dataUrl = "{{ route('skyline-users.index') }}";

        var table = new $('#skyline-users-table').DataTable({
            pageLength: 10,
            processing: true,
            serverSide: true,
            orderClasses: false,
            deferRender: true,
            paging: true,
            searching: true,
            info: true,
            lengthChange: false,
            ajax: {
                url: dataUrl,
                data: function(d) {
                    d.first_name = $('input[name=first_name]').val();
                    d.last_name = $('input[name=last_name]').val();
                    d.email = $('input[name=email]').val();
                    d.status = $('input[name=status]').val();
                    /* d.gender = $('input[name=gender]').val();
                    d.date_of_birth = $('input[name=date_of_birth]').val();*/
                    d.start_date = $('input[name=start_date]').val();
                    d.end_date = $('input[name=end_date]').val();
                }
            },
            columns: [{
                    data: 'id',
                    name: 'id',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row, meta) {
                        /* Checkbox **/
                        return ` <div class="form-check">
                            <input value=${data}  class="form-check-input list-checkbox" id="listCheckbox${data}" type="checkbox">
                            <label class="form-check-label" for="listCheckbox${data}"></label>
                        </div>`;
                    }
                },
                {
                    data: 'first_name',
                    name: 'first_name',
                    render: function(data, type, row, meta) {
                        return ` <span class="item-first_name">${data}</span> `
                    }
                },
                {
                    data: 'last_name',
                    name: 'last_name',
                    render: function(data, type, row, meta) {
                        return ` <span class="item-last_name">${data}</span> `
                    }
                },
                /*{
                    data: 'gender',
                    name: 'gender',
                    render: function(data, type, row, meta) {
                        return ` <span class="item-gender">${data}</span> `
                    }
                },*/
                {
                    data: 'email',
                    name: 'email',
                    render: function(data, type, row, meta) {
                        return ` <span class="item-email">${data}</span> `
                    }
                },
                {
                    data: 'product',
                    name: 'product',
                    render: function(data, type, row, meta) {
                        return ` <span class="item-product">${data??''}</span> `
                    }
                },
                {
                    data: 'status',
                    name: 'status',
                    render: function(data, type, row, meta) {
                        let html='';
                        if(data === 1){
                            html= ` <span class="text-success item-status">●</span> Active `;
                        }else if(data === 0){
                            html= ` <span class="text-danger item-status">●</span> Deactive `;
                        }else if(data === 2){
                            html= ` <span class="text-warning item-status">●</span> Pending `;
                        }
                        else if(data === 3){
                            html= ` <span class="text-secondary item-status">●</span> Block `;
                        }
                        return html;
                    }
                },
                {
                    data: 'created_at',
                    name: 'created_at',
                    render: function(data, type, row, meta) {
                        return ` <span class="item-created_at">${data}</span> `
                    }
                },
                {
                    data: 'id',
                    name: 'id',
                    className: 'text-end',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row, meta) {
                        let id = btoa(data);
                        /* Checkbox **/
                        return `<div class="dropdown">
                                <a class="dropdown-ellipses dropdown-toggle" href="#"
                                    role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0)" data-id="${id}" data-action="{{ url('/skyline-users') }}/${data}" class="dropdown-item deleteRecord ">
                                        Delete
                                    </a>
                                    <a href="{{ url('/skyline-users/') }}/${id}/edit/" class="dropdown-item ">
                                        Edit
                                     </a>
                                     <a href="{{ url('/skyline-users/') }}/${id}"  class="dropdown-item">
                                        Show
                                     </a>
                                </div>
                            </div>`;
                    }
                },
            ],
            drawCallback: function(settings) {
                let api = this.api();
                let apiData = api.ajax.json();
                let allUsersTotal = 0;
                allUsersTotal = apiData?.recordsTotal ?? 0;
                $("#all_skyline_users_total").text(allUsersTotal);
            }
        });


        // Search filter
        $('#skyline-users-search-form').on('submit', function(e) {
            table.draw();
            e.preventDefault();
        });

        // Show per page
        $('#page-length-select').change(function(e) {
            table.page.len($(this).val()).draw();
            e.preventDefault();
        });

        // Search box
        $("#skyline-user-search-filter").keyup(function(e) {
            table.search(this.value).draw();
            e.preventDefault();
        });

        // Remove checkbox  on pagination click
        $('.dataTable').on('page.dt', function() {
            $(".list-alert-close").trigger("click");
            $(".list-checkbox:checkbox ,#listCheckboxAll").prop("checked", false); // false
        });

    });
</script>
