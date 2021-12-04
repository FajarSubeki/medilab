<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">Setting Web Data</h6>
                    </div>
                    <div class="col-6 text-end">
                      <a class="btn bg-gradient-dark mb-0" href="<?=base_url()?>index.php/webdata/add_edit"><i class="fas fa-plus"></i>&nbsp;&nbsp;Setting Web Data</a>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0 m-3 pt-0 pb-2">
                    <?=$this->session->flashdata('msg')?>
                    <br>
                    <div class="table-responsive p-0">
                        <table id="datatables" class="table table-striped table-bordered align-items-center mb-0">
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">Title Text</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_webdata[0]['title_text']?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">Subtitle Text</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_webdata[0]['subtitle_text']?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">Register Text</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_webdata[0]['register_text']?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">Card Text</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_webdata[0]['card_text']?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">Card Subtitle</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_webdata[0]['card_subtitle']?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">Service Title</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_webdata[0]['service_title']?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">Service Subtitle</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_webdata[0]['service_subtitle']?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">Dokter Title</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_webdata[0]['dokter_title']?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">Dokter Subtitle</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_webdata[0]['dokter_subtitle']?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">FAQ Title</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_webdata[0]['faq_title']?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">FAQ Subtitle</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_webdata[0]['faq_subtitle']?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">Registration Title</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_webdata[0]['registration_title']?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">Registration Text</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_webdata[0]['registration_text']?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%" class="align-middle text-xs">
                                    <h6 class="mb-0 text-xs">Registration Button</h6>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-xs text-secondary mb-0">
                                        <?=$data_webdata[0]['registration_btn']?>
                                    </p>
                                </td>
                            </tr>
                           
                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>