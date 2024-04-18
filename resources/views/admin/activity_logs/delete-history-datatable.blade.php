<script type="text/javascript">
    $(function() {

        var table = new $('#activity-logs-table').DataTable({
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
                url: "{{ route('activity_logs.delete.history') }}",
                data: function(d) {
                    d.subject = $('input[name=subject]').val();
                    d.ip = $('input[name=ip]').val();
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
                    data: 'subject',
                    name: 'subject',
                    render: function(data, type, row, meta) {
                        return ` <span class="item-subject">${data}</span> `
                    }
                },
                {
                    data: 'user',
                    name: 'user',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row, meta) {
                        let html='';
                        if(data){
                            html = ` <a class="item-url text-reset" href="${data?.id}">${data?.first_name} ${data?.last_name}</a> `
                        }
                        return html;
                    }
                },
                {
                    data: 'method',
                    name: 'method',
                    render: function(data, type, row, meta) {
                        return ` <span class="item-method">${data}</span> `
                    }
                },
                {
                    data: 'created_at',
                    name: 'created_at',
                    render: function(data, type, row, meta) {
                        return ` <span class="item-method">${data}</span> `
                    }
                },
                {
                    data: 'id',
                    name: 'id',
                    className: 'text-end',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row, meta) {
                        /* Checkbox **/
                        return `<div class="dropdown">
                                <a class="dropdown-ellipses dropdown-toggle" href="#"
                                    role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0)" data-id="${data}" data-action="{{ url('/activity-logs/force-delete') }}/${data}" class="dropdown-item deleteForceFullyRecord ">
                                        Force Delete
                                    </a>
                                    <a href="javascript:void(0)" data-id="${data}" data-action="{{ url('/activity-logs/restore') }}/${data}" class="dropdown-item restoreRecord ">
                                        Restore
                                    </a>
                                </div>
                            </div>`;
                    }
                },
            ],
            drawCallback: function(settings) {
                let api = this.api();
                let apiData = api.ajax.json();
                let allActivityLogTotal = 0,
                    yourActivityLogTotal = 0,
                    activityLogOnlyTrashedTotal = 0;

                activityLogOnlyTrashedTotal = apiData?.recordsTotal ?? 0;
                yourActivityLogTotal = apiData?.yourActivityLogTotal ?? 0;
                allActivityLogTotal = apiData?.activityLogTotal ?? 0;

                $("#all_activity_log_total").text(allActivityLogTotal);
                $("#your_activity_log_total").text(yourActivityLogTotal);
                $("#activity_log_only_trashed_total").text(activityLogOnlyTrashedTotal);
            }
        });


        // Search filter
        $('#activity-logs-search-form').on('submit', function(e) {
            table.draw();
            e.preventDefault();
        });

        // Show per page
        $('#page-length-select').change(function(e) {
            table.page.len($(this).val()).draw();
            e.preventDefault();
        });

        // Search box
        $("#activity-logs-search-filter").keyup(function(e) {
            table.search(this.value).draw();
            e.preventDefault();
        });

        // Remove checkbox  on pagination click
        $('.dataTable').on('page.dt', function() {
            $(".list-alert-close").trigger("click");
            $(".list-checkbox:checkbox ,#listCheckboxAll").prop("checked", false); // false
        });
        var length = table.page.info().recordsTotal;
        console.log("length", length)
        $("#activity_log_only_trashed_count").text(length);
    });
</script>
