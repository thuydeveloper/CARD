<div class="modal fade" id="showServiceModal" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">{{ __('messages.vcard.service_details') }}</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 mb-5">
                        <label class="form-label fs-6  text-gray-700">
                            {{__('messages.common.name').':'}}
                        </label>
                        <p id="showName" class="text-gray-600 fw-bold mb-0"></p>
                    </div>
                    <div class="col-sm-12 mb-5">
                        <label class="form-label fs-6  text-gray-700">
                            {{__('messages.common.description').':'}}
                        </label>
                        <p id="showDesc" class="text-gray-600 fw-bold mb-0"></p>
                    </div>
                    <div class="col-sm-12 mb-5">
                        <div class="mb-3" io-image-input="true">
                            <label for="editServicePreview"
                                   class="form-label">{{ __('messages.vcard.service_icon').':' }}</label>
                            <div class="d-block">
                                <div class="image-picker">
                                    <div class="image previewImage" id="showServiceIcon"
                                         style="background-image: url({{ asset('assets/images/default_service.png') }})"></div>
                                    <div class="image-upload file-validation d-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-5 serviceUrl">
                        <label class="form-label fs-6 text-gray-700">
                            {{__('messages.common.service_url').':'}}
                        </label>
                        <p id="showURL" class="text-gray-600 fw-bold mb-0"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
