@extends('voyager::master')

@section('page_title', __('voyager::generic.view').' '.$dataType->display_name_singular)

@section('page_header')
  <div class="container-fluid atr-header">
    <div class="atr-caption">
      <i class="{{ $dataType->icon }}"></i>
      <h2>{{ __('voyager::generic.viewing') }} {{ ucfirst($dataType->display_name_singular) }}</h2>
    </div>
    <div class="atr-buttons">
      @can('edit', $dataTypeContent)
        <a href="{{ route('voyager.'.$dataType->slug.'.edit', $dataTypeContent->getKey()) }}" class="btn btn-info">
          <i class="voyager-pen"></i>
          <span class="hidden-xs hidden-sm">&nbsp;{{ __('voyager::generic.edit') }}</span>
        </a>
      @endcan
      @can('delete', $dataTypeContent)
        @if($isSoftDeleted)
          <a href="{{ route('voyager.'.$dataType->slug.'.restore', $dataTypeContent->getKey()) }}" title="{{ __('voyager::generic.restore') }}" class="btn btn-default restore" data-id="{{ $dataTypeContent->getKey() }}" id="restore-{{ $dataTypeContent->getKey() }}">
            <i class="voyager-trash"></i><span class="hidden-xs hidden-sm">&nbsp;{{ __('voyager::generic.restore') }}</span>
          </a>
        @else
          <a href="javascript:;" title="{{ __('voyager::generic.delete') }}" class="btn btn-danger delete" data-id="{{ $dataTypeContent->getKey() }}" id="delete-{{ $dataTypeContent->getKey() }}">
            <i class="voyager-trash"></i><span class="hidden-xs hidden-sm">&nbsp;{{ __('voyager::generic.delete') }}</span>
          </a>
        @endif
      @endcan

      <a href="{{ route('voyager.'.$dataType->slug.'.index') }}" class="btn btn-warning">
        <i class="voyager-list"></i>
        <span class="hidden-xs hidden-sm">&nbsp;{{ __('voyager::generic.return_to_list') }}</span>
      </a>
      @include('voyager::multilingual.language-selector')
    </div>
  </div>
@stop

@section('content')
    <div class="page-content read container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="atr-bread-container">
                  <div class="atr-read-container">
                    <!-- form start -->
                    @foreach($dataType->readRows as $row)
                      @php
                        if ($dataTypeContent->{$row->field.'_read'}) {
                            $dataTypeContent->{$row->field} = $dataTypeContent->{$row->field.'_read'};
                        }
                      @endphp
                      <div class="atr-read-heading">{{ $row->display_name }}</div>

                      <div class="atr-read-body">
                        @if (isset($row->details->view))
                          @include($row->details->view, ['row' => $row, 'dataType' => $dataType, 'dataTypeContent' => $dataTypeContent, 'content' => $dataTypeContent->{$row->field}, 'action' => 'read'])
                        @elseif($row->type == "image")

                          @isset($dataTypeContent->{$row->field}))
                          <img class="img-thumbnail"
                               style="height: 100px;" src="{{ filter_var($dataTypeContent->{$row->field}, FILTER_VALIDATE_URL) ? $dataTypeContent->{$row->field} : Voyager::image($dataTypeContent->{$row->field}) }}">
                          @endisset

                        @elseif($row->type == 'multiple_images')
                          @if(json_decode($dataTypeContent->{$row->field}))
                            @foreach(json_decode($dataTypeContent->{$row->field}) as $file)
                              <img class="img-thumbnail"
                                   style="height: 100px;  margin-bottom: 0.5rem;"
                                   src="{{ filter_var($file, FILTER_VALIDATE_URL) ? $file : Voyager::image($file) }}">
                            @endforeach
                          @else
                            <img class="img-thumbnail"
                                 style="height: 100px;  margin-bottom: 0.5rem;"
                                 src="{{ filter_var($dataTypeContent->{$row->field}, FILTER_VALIDATE_URL) ? $dataTypeContent->{$row->field} : Voyager::image($dataTypeContent->{$row->field}) }}">
                          @endif
                        @elseif($row->type == 'relationship')
                          @include('voyager::formfields.relationship', ['view' => 'read', 'options' => $row->details])
                        @elseif($row->type == 'select_dropdown' && property_exists($row->details, 'options') &&
                                !empty($row->details->options->{$dataTypeContent->{$row->field}})
                        )
                          <?php echo $row->details->options->{$dataTypeContent->{$row->field}};?>
                        @elseif($row->type == 'select_multiple')
                          @if(property_exists($row->details, 'relationship'))

                            @foreach(json_decode($dataTypeContent->{$row->field}) as $item)
                              {{ $item->{$row->field}  }}
                            @endforeach

                          @elseif(property_exists($row->details, 'options'))
                            @if (!empty(json_decode($dataTypeContent->{$row->field})))
                              @foreach(json_decode($dataTypeContent->{$row->field}) as $item)
                                @if (@$row->details->options->{$item})
                                  {{ $row->details->options->{$item} . (!$loop->last ? ', ' : '') }}
                                @endif
                              @endforeach
                            @else
                              {{ __('voyager::generic.none') }}
                            @endif
                          @endif
                        @elseif($row->type == 'date' || $row->type == 'timestamp')
                          {{ property_exists($row->details, 'format') ? \Carbon\Carbon::parse($dataTypeContent->{$row->field})->formatLocalized($row->details->format) : $dataTypeContent->{$row->field} }}
                        @elseif($row->type == 'checkbox')
                          @if(property_exists($row->details, 'on') && property_exists($row->details, 'off'))
                            @if($dataTypeContent->{$row->field})
                              <span class="label label-info">{{ $row->details->on }}</span>
                            @else
                              <span class="label label-primary">{{ $row->details->off }}</span>
                            @endif
                          @else
                            {{ $dataTypeContent->{$row->field} }}
                          @endif
                        @elseif($row->type == 'color')
                          <span class="badge badge-lg" style="background-color: {{ $dataTypeContent->{$row->field} }}">{{ $dataTypeContent->{$row->field} }}</span>
                        @elseif($row->type == 'coordinates')
                          @include('voyager::partials.coordinates')
                        @elseif($row->type == 'rich_text_box')
                          @include('voyager::multilingual.input-hidden-bread-read')
                          <p>{!! $dataTypeContent->{$row->field} !!}</p>
                        @elseif($row->type == 'file')
                          @if(json_decode($dataTypeContent->{$row->field}))
                            @foreach(json_decode($dataTypeContent->{$row->field}) as $file)
                              <a href="{{ Storage::disk(config('voyager.storage.disk'))->url($file->download_link) ?: '' }}">
                                {{ $file->original_name ?: '' }}
                              </a>
                              <br/>
                            @endforeach
                            {{--@else--}}
                            {{--<a href="{{ Storage::disk(config('voyager.storage.disk'))->url($row->field) ?: '' }}">--}}
                            {{--{{ __('voyager::generic.download') }}--}}
                            {{--</a>--}}
                          @endif

                        @elseif($row->type == 'video')
                          <p>{{ filter_var($dataTypeContent->{$row->field}, FILTER_VALIDATE_URL) ? $dataTypeContent->{$row->field} : Storage::disk(config('voyager.storage.disk'))->url($dataTypeContent->{$row->field}) }}</p>
                        @else
                          @include('voyager::multilingual.input-hidden-bread-read')
                          <p>{{ $dataTypeContent->{$row->field} }}</p>
                        @endif
                      </div><!-- panel-body -->
                      @if(!$loop->last)
                        <hr>
                      @endif
                    @endforeach
                  </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Single delete modal --}}
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }} {{ strtolower($dataType->display_name_singular) }}?</h4>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('voyager.'.$dataType->slug.'.index') }}" id="delete_form" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger pull-right delete-confirm"
                               value="{{ __('voyager::generic.delete_confirm') }} {{ strtolower($dataType->display_name_singular) }}">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop

@section('javascript')
    @if ($isModelTranslatable)
        <script>
            $(document).ready(function () {
                $('.side-body').multilingual();
            });
        </script>
        <script src="{{ voyager_asset('js/multilingual.js') }}"></script>
    @endif
    <script>
        var deleteFormAction;
        $('.delete').on('click', function (e) {
            var form = $('#delete_form')[0];

            if (!deleteFormAction) {
                // Save form action initial value
                deleteFormAction = form.action;
            }

            form.action = deleteFormAction.match(/\/[0-9]+$/)
                ? deleteFormAction.replace(/([0-9]+$)/, $(this).data('id'))
                : deleteFormAction + '/' + $(this).data('id');

            $('#delete_modal').modal('show');
        });

    </script>
@stop
