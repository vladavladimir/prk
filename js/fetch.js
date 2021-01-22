 function fetch() {
    
        var search = $("#search").val();
        var lang = $("#lang").val();
        var ajax = 1;

        $.ajax({
        url: '/ajax/search/',
        type: 'POST',
        data: {
            'search':search,
            'lang':lang,
            'ajax':ajax
        },
        dataType: 'JSON',
            success: function(response){
                if(response){
                   var data = response;
                   $.each(data, function(i, item) {
                    var tempHtml = `
                        <div class="community-post wow fadeInUp" data-wow-delay="0.6s">
                        <div class="post-content">
                            <div class="entry-content">
                                <h2 class="post-title"><a data-id="${item.id}" onclick="openModal($(this));">${item.number_serie}</a></h2>
                                <p>${item.title}</p>
                            </div>
                        </div>
                        <div class="post-meta-wrapper">
                            <ul class="post-meta-info">
                                <li><a href="#" id="view-num-${item.id}"><i class="fas fa-eye"></i>${item.view}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal fade" id="previewModal-${item.id}" tabindex="-1" role="dialog" aria-labelledby="previewModal-${item.id}Label" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="previewModal-${item.id}Label"><b>Number:</b> ${item.number_serie}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p><b>Title:</b> ${item.title}</p>
                                <p><b>Description:</b> ${item.description}</p>
                                <p><b>Origin:</b> ${item.origin}</p>
                                <p><b>View:</b> ${item.view}</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    `;
                    $('#search-results').prepend(tempHtml);
                     $("#results").html('');
                   });
            }
        }});
        return false;
      }
    
    function openModal(e) {
        var id = e.attr("data-id");
        var lang = $("#lang").val();
       
        $('#previewModal-'+id).modal('show');
        $.ajax({
            type: "POST",
            url: '/ajax/increment/',
            data:{
                'id':id,
                'lang':lang,
            },
            success: function(r) {
                  $('#view-num-'+id).html(`<i class="fas fa-eye"></i> `+r);
                // console.log(r);
            }
        });
    }
    $('.ppl-img').randomize({
        path :'/img/home_support/bn'
    });