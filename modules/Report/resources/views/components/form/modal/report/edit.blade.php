<!-- Modals add menu -->
<div id="modal-form-edit-report-{{ $report->id }}" class="modal fade" tabindex="-1" aria-labelledby="modal-form-edit-report-{{ $report->id }}-label" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="{{ route('report.update', $report->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="modal-header">
          <h5 class="modal-title" id="modal-form-edit-report-{{ $report->id }}-label">Edit ({{ strlen($report->description) > 32 ? substr($report->title, 0, 16) . '...' : $report->title }})</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
        </div>
        <div class="modal-body">

          @if(auth()->user()->hasRole('User'))
          <input type="hidden" name="_c2VuZGVy" value="VXNlcg==">

          @elseif(auth()->user()->hasRole('Super Admin'))
          <input type="hidden" name="_c2VuZGVy" value="U3VwZXIgQWRtaW4=">

          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" id="status" name="status" data-choices>
              <option @selected($report->status->value == 'Pending') value="Pending">Pending</option>
              <option @selected($report->status->value == 'Processed') value="Processed">Processed</option>
              <option @selected($report->status->value == 'Accepted') value="Accepted">Accepted</option>
              <option @selected($report->status->value == 'Rejected') value="Rejected">Rejected</option>
              <option @selected($report->status->value == 'Closed') value="Closed">Closed</option>
            </select>
            <x-form.validation.error name="status" />
          </div>
          @endif

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary ">Update</button>
        </div>
      </form>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->