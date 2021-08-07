
<!-- Edit user Modal -->
    <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-header">
            <h4 id="editUserModalTitle" class="modal-title">Edit user</h4>

            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body">
            <!-- Nav -->
            <ul class="js-tabs-to-dropdown nav nav-segment nav-fill nav-lg-down-break mb-5" id="editUserModalTab" role="tablist"
                data-hs-transform-tabs-to-btn-options='{
                  "transformResolution": "lg",
                  "btnClassNames": "btn btn-block btn-white dropdown-toggle justify-content-center mb-3"
                }'>
              <li class="nav-item">
                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab">
                  <i class="tio-user-outlined mr-1"></i> Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="billing-address-tab" data-toggle="tab" href="#billing-address" role="tab">
                  <i class="tio-city mr-1"></i> Billing address
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="change-password-tab" data-toggle="tab" href="#change-password" role="tab">
                  <i class="tio-lock-outlined mr-1"></i> Change password
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="notifications-tab" data-toggle="tab" href="#notifications" role="tab">
                  <i class="tio-notifications-on-outlined mr-1"></i> Notifications
                </a>
              </li>
            </ul>
            <!-- End Nav -->

            <!-- Tab Content -->
            <div class="tab-content" id="editUserModalTabContent">
              <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <form>
                  <!-- Profile Cover -->
                  <div class="profile-cover">
                    <div class="profile-cover-img-wrapper">
                      <img id="editProfileCoverImgModal" class="profile-cover-img" src="<?= $assets; ?>/assets/img/1920x400/img1.jpg" alt="Image Description">

                      <!-- Custom File Cover -->
                      <div class="profile-cover-content profile-cover-btn p-3">
                        <div class="custom-file-btn">
                          <input type="file" class="js-file-attach custom-file-btn-input" id="editProfileCoverUplaoderModal"
                                 data-hs-file-attach-options='{
                                      "textTarget": "#editProfileCoverImgModal",
                                      "mode": "image",
                                      "targetAttr": "src",
                                      "allowTypes": [".png", ".jpeg", ".jpg"]
                                   }'>
                          <label class="custom-file-btn-label btn btn-sm btn-white" for="editProfileCoverUplaoderModal">
                            <i class="tio-add-photo"></i>
                            <span class="d-none d-sm-inline-block ml-1">Upload header</span>
                          </label>
                        </div>
                      </div>
                      <!-- End Custom File Cover -->
                    </div>
                  </div>
                  <!-- End Profile Cover -->

                  <!-- Avatar -->
                  <label class="avatar avatar-xxl avatar-circle avatar-border-lg avatar-uploader profile-cover-avatar mb-5" for="editAvatarUploaderModal">
                    <img id="editAvatarImgModal" class="avatar-img" src="<?= $assets; ?>/assets/img/160x160/img9.jpg" alt="Image Description">

                    <input type="file" class="js-file-attach avatar-uploader-input" id="editAvatarUploaderModal"
                           data-hs-file-attach-options='{
                                "textTarget": "#editAvatarImgModal",
                                "mode": "image",
                                "targetAttr": "src",
                                "allowTypes": [".png", ".jpeg", ".jpg"]
                             }'>

                    <span class="avatar-uploader-trigger">
                      <i class="tio-edit avatar-uploader-icon shadow-soft"></i>
                    </span>
                  </label>
                  <!-- End Avatar -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editFirstNameModalLabel" class="col-sm-3 col-form-label input-label">Full name <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Displayed on public forums, such as Front."></i></label>

                    <div class="col-sm-9">
                      <div class="js-form-message input-group input-group-sm-down-break">
                        <input type="text" class="form-control" name="editFirstNameModal" id="editFirstNameModalLabel" placeholder="Your first name" aria-label="Your first name" value="Ella">
                        <input type="text" class="form-control" name="editLastNameModal" id="editLastNameModalLabel" placeholder="Your last name" aria-label="Your last name" value="Lauda">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editEmailModalLabel" class="col-sm-3 col-form-label input-label">Email</label>

                    <div class="col-sm-9">
                      <div class="js-form-message">
                        <input type="email" class="form-control" name="editEmailModal" id="editEmailModalLabel" placeholder="Email" aria-label="Email" value="ella@example.com">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                    <div class="row form-group">
                      <label for="editPhoneLabel" class="col-sm-3 col-form-label input-label">Phone <span class="input-label-secondary">(Optional)</span></label>

                      <div class="col-sm-9">
                        <div class="input-group input-group-sm-down-break align-items-center">
                          <input type="text" class="js-masked-input form-control" name="phone" id="editPhoneLabel" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx" value="1(609)972-22-22"
                                 data-hs-mask-options='{
                                   "template": "+0(000)000-00-00"
                                 }'>

                          <div class="input-group-append">
                            <!-- Select -->
                            <div class="select2-custom">
                              <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" name="editPhoneSelect"
                                    data-hs-select2-options='{
                                      "minimumResultsForSearch": "Infinity",
                                      "dropdownAutoWidth": true,
                                      "width": "6rem"
                                    }'>
                                <option value="Mobile" selected>Mobile</option>
                                <option value="Home">Home</option>
                                <option value="Work">Work</option>
                                <option value="Fax">Fax</option>
                                <option value="Direct">Direct</option>
                              </select>
                              <!-- End Select -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editOrganizationModalLabel" class="col-sm-3 col-form-label input-label">Organization</label>

                    <div class="col-sm-9">
                      <div class="js-form-message">
                        <input type="text" class="form-control" name="editOrganizationModal" id="editOrganizationModalLabel" placeholder="Your organization" aria-label="Your organization" value="Htmlstream">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editDepartmentModalLabel" class="col-sm-3 col-form-label input-label">Department</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="editDepartmentModal" id="editDepartmentModalLabel" placeholder="Your department" aria-label="Your department">
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label input-label">Account type</label>

                    <div class="col-sm-9">
                      <div class="js-form-message input-group input-group-sm-down-break">
                        <!-- Custom Radio -->
                        <div class="form-control">
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="editUserModalAccountTypeModalRadio" id="editUserModalAccountTypeModalRadio1" checked>
                            <label class="custom-control-label" for="editUserModalAccountTypeModalRadio1">Individual</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->

                        <!-- Custom Radio -->
                        <div class="form-control">
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="editUserModalAccountTypeModalRadio" id="editUserModalAccountTypeModalRadio2">
                            <label class="custom-control-label" for="editUserModalAccountTypeModalRadio2">Company</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>
              </div>

              <div class="tab-pane fade" id="billing-address" role="tabpanel" aria-labelledby="billing-address-tab">
                <form>

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editAddressLine1ModalLabel" class="col-sm-3 col-form-label input-label">Address line 1</label>

                    <div class="col-sm-9">
                      <div class="js-form-message">
                        <input type="text" class="form-control" name="editAddressLine1Modal" id="editAddressLine1ModalLabel" placeholder="Your address" aria-label="Your address" value="45 Roker Terrace, Latheronwheel">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editAddressLine2ModalLabel" class="col-sm-3 col-form-label input-label">Address line 2 <span class="input-label-secondary">(Optional)</span></label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="editAddressLine2Modal" id="editAddressLine2ModalLabel" placeholder="Your address" aria-label="Your address">
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editZipCodeModalLabel" class="col-sm-3 col-form-label input-label">Zip code <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="You can find your code in a postal address."></i></label>

                    <div class="col-sm-9">
                      <div class="js-form-message">
                        <input type="text" class="js-masked-input form-control" name="editZipCodeModal" id="editZipCodeModalLabel" placeholder="Your zip code" aria-label="Your zip code" value="KW5 8NW"
                               data-hs-mask-options='{
                                   "template": "AA0 0AA"
                                 }'>
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <hr>

                  <!-- Toggle Switch -->
                  <label class="row form-group toggle-switch" for="editUserModalBillingPreferencesSwitch1">
                    <span class="col-8 col-sm-9 toggle-switch-content ml-0">
                      <span class="d-block text-dark mb-1">Default billing address</span>
                      <span class="d-block font-size-sm text-muted">Set as default billing address</span>
                    </span>
                    <span class="col-4 col-sm-3">
                      <input type="checkbox" class="toggle-switch-input" id="editUserModalBillingPreferencesSwitch1" checked>
                      <span class="toggle-switch-label ml-auto">
                        <span class="toggle-switch-indicator"></span>
                      </span>
                    </span>
                  </label>
                  <!-- End Toggle Switch -->

                  <!-- Toggle Switch -->
                  <label class="row form-group toggle-switch" for="editUserModalBillingPreferencesSwitch2">
                    <span class="col-8 col-sm-9 toggle-switch-content ml-0">
                      <span class="d-block text-dark mb-1">See info about people who view my profile</span>
                      <span class="d-block font-size-sm text-muted"><a class="link" href="#">More about viewer info</a>.</span>
                    </span>
                    <span class="col-4 col-sm-3">
                      <input type="checkbox" class="toggle-switch-input" id="editUserModalBillingPreferencesSwitch2">
                      <span class="toggle-switch-label ml-auto">
                        <span class="toggle-switch-indicator"></span>
                      </span>
                    </span>
                  </label>
                  <!-- End Toggle Switch -->

                  <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-white" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <span class="mx-2"></span>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>
              </div>

              <div class="tab-pane fade" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
                <form>
                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editUserModalCurrentPasswordLabel" class="col-sm-3 col-form-label input-label">Current password</label>

                    <div class="col-sm-9">
                      <div class="input-group input-group-merge">
                        <input type="password" class="js-toggle-password form-control" name="currentPassword" id="editUserModalCurrentPasswordLabel" placeholder="Enter current password" aria-label="Enter current password"
                               data-hs-toggle-password-options='{
                                   "target": "#editUserModalChangePassModalTarget",
                                   "defaultClass": "tio-hidden-outlined",
                                   "showClass": "tio-visible-outlined",
                                   "classChangeTarget": "#editUserModalChangePassModalIcon"
                                 }'>
                        <div id="editUserModalChangePassModalTarget" class="input-group-append">
                          <a class="input-group-text" href="javascript:;">
                            <i id="editUserModalChangePassModalIcon" class="tio-visible-outlined"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editUserModalNewPassword" class="col-sm-3 col-form-label input-label">New password</label>

                    <div class="col-sm-9">
                      <input type="password" class="js-toggle-password form-control" name="editUserModalNewPassword" id="editUserModalNewPassword" placeholder="Enter new password" aria-label="Enter new password"
                             data-hs-toggle-password-options='{
                                 "target": "#editUserModalChangePassModalCheckbox"
                               }'>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editUserModalConfirmNewPasswordLabel" class="col-sm-3 col-form-label input-label">Confirm new password</label>

                    <div class="col-sm-9">
                      <input type="password" class="js-toggle-password form-control" name="confirmNewPassword" id="editUserModalConfirmNewPasswordLabel" placeholder="Confirm your new password" aria-label="Confirm your new password"
                             data-hs-toggle-password-options='{
                                 "target": "#editUserModalChangePassModalCheckbox"
                               }'>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <div class="col-sm-9 offset-sm-3">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="editUserModalChangePassModalCheckbox" class="custom-control-input">
                        <label class="custom-control-label" for="editUserModalChangePassModalCheckbox">Show password</label>
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>
              </div>

              <div class="tab-pane fade" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
                <!-- Table -->
                <div class="table-responsive datatable-custom">
                  <table class="table table-thead-bordered table-nowrap table-align-middle table-first-col-px-0">
                    <thead class="thead-light">
                      <tr>
                        <th>Type</th>
                        <th class="text-center">
                          <div class="mb-1">
                            <img class="avatar avatar-xs" src="<?= $assets; ?>/assets/svg/illustrations/at-line.svg" alt="Image Description">
                          </div>
                          Email
                        </th>
                        <th class="text-center">
                          <div class="mb-1">
                            <img class="avatar avatar-xs" src="<?= $assets; ?>/assets/svg/illustrations/world-line.svg" alt="Image Description">
                          </div>
                          Browser
                        </th>
                        <th class="text-center">
                          <div class="mb-1">
                            <img class="avatar avatar-xs" src="<?= $assets; ?>/assets/svg/illustrations/phone-line.svg" alt="Image Description">
                          </div>
                          App
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>New for you</td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox1" checked>
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox1"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox2">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox2"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox3">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox3"></label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>Account activity <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Get important notifications about you or activity you've missed"></i></td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox4" checked>
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox4"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox5" checked>
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox5"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox6" checked>
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox6"></label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>A new browser used to sign in</td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox7" checked>
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox7"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox8" checked>
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox8"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox9" checked>
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox9"></label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>A new device is linked</td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox10">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox10"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox11" checked>
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox11"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox12">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox12"></label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>A new device connected <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Email me when a new device connected"></i></td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox13">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox13"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox14" checked>
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox14"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox15" checked>
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox15"></label>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- End Table -->

                <hr>

                <div class="row">
                  <div class="col-sm">
                    <!-- Form Group -->
                    <div class="form-group">
                      <span class="d-block mb-2">When should we send notifications?</span>

                      <!-- Select -->
                      <select class="js-select2-custom custom-select" size="1" style="opacity: 0;"
                              data-hs-select2-options='{
                                  "minimumResultsForSearch": "Infinity",
                                  "customClass": "custom-select",
                                  "width": "15rem"
                                }'>
                        <option value="whenToSendNotification1">Always</option>
                        <option value="whenToSendNotification2">Only when I'm online</option>
                      </select>
                      <!-- End Select -->
                    </div>
                    <!-- End Form Group -->
                  </div>

                  <div class="col-sm">
                    <!-- Form Group -->
                    <div class="form-group">
                      <span class="d-block mb-2">Send a daily summary ("Daily Digest") of task activity.</span>

                      <div class="form-row">
                        <div class="col-auto">
                          <!-- Select -->
                          <select class="js-select2-custom custom-select" size="1" style="opacity: 0;"
                                  data-hs-select2-options='{
                                      "minimumResultsForSearch": "Infinity",
                                      "customClass": "custom-select",
                                      "dropdownAutoWidth": true,
                                      "width": true
                                    }'>
                            <option value="EveryDay">Every day</option>
                            <option value="weekdays" selected>Weekdays</option>
                            <option value="Never">Never</option>
                          </select>
                          <!-- End Select -->
                        </div>

                        <div class="col-auto">
                          <!-- Select -->
                          <select class="js-select2-custom custom-select" size="1" style="opacity: 0;"
                                  data-hs-select2-options='{
                                      "minimumResultsForSearch": "Infinity",
                                      "customClass": "custom-select",
                                      "dropdownAutoWidth": true,
                                      "width": true
                                    }'>
                            <option value="0">at 12 AM</option>
                            <option value="1">at 1 AM</option>
                            <option value="2">at 2 AM</option>
                            <option value="3">at 3 AM</option>
                            <option value="4">at 4 AM</option>
                            <option value="5">at 5 AM</option>
                            <option value="6">at 6 AM</option>
                            <option value="7">at 7 AM</option>
                            <option value="8">at 8 AM</option>
                            <option value="9" selected>at 9 AM</option>
                            <option value="10">at 10 AM</option>
                            <option value="11">at 11 AM</option>
                            <option value="12">at 12 PM</option>
                            <option value="13">at 1 PM</option>
                            <option value="14">at 2 PM</option>
                            <option value="15">at 3 PM</option>
                            <option value="16">at 4 PM</option>
                            <option value="17">at 5 PM</option>
                            <option value="18">at 6 PM</option>
                            <option value="19">at 7 PM</option>
                            <option value="20">at 8 PM</option>
                            <option value="21">at 9 PM</option>
                            <option value="22">at 10 PM</option>
                            <option value="23">at 11 PM</option>
                          </select>
                          <!-- End Select -->
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                  </div>
                </div>

                <p>In order to cut back on noise, email notifications are grouped together and only sent when you're idle or offline.</p>

                <div class="d-flex justify-content-end">
                  <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
            <!-- End Tab Content -->
            </div>
          <!-- End Body -->
        </div>
      </div>
    </div>
<!-- End Edit user Modal -->