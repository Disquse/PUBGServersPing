<?php head(); ?>
    <nav><div class="orange nav-wrapper"><a href="/" class="white-text brand-logo center">PUBG SERVERS PING <small class="hoverable version">v3</small></a><div style="background-color: rgba(0,0,0,0.2); color: #fff; margin-left: 15px" class="chip"><img src="/images/avatar.jpg" alt=":)">Disquse</div></div></nav>
    <div class="container row">
        <br><div class="col s12 m10 l10 offset-m1 offset-l1">
            <div class="card-panel" style="padding: 18px;">
                <center><b>Trang này được tạo cho <a href="http://twitch.tv/beastqt">BeastQT</a>. Anh ấy là một streamer người Nga tuyệt vời!</b></center><br><div style="margin-bottom: 10px" class="divider"></div>
                <center>
                    <a style="background-color: rgba(0,0,0,0.05)" onclick="selectAll()" class="topbutton waves-effect waves-orange btn-flat">Chọn tất cả</a>
                    <a style="background-color: rgba(0,0,0,0.05)" onclick="unselectAll()" class="topbutton waves-effect waves-orange btn-flat">Bỏ chọn tất cả</a>
                    <a style="background-color: rgba(0,0,0,0.05)" onclick="clearAllLatency()" class="topbutton waves-effect waves-orange btn-flat">Xóa tất cả</a>
                    <a style="background-color: rgba(0,0,0,0.05)" class="topbutton dropdown-button btn-flat" data-activates="dropdown">Khu vực</a>
                    <ul id="dropdown" class="dropdown-content">
                        <li><a onclick="selectAmerica()">Châu Mỹ</a></li>
                        <li><a onclick="selectEurope()">Châu Âu</a></li>
                        <li><a onclick="selectAsia()">Châu Á</a></li>
                    </ul>
                    <a style="background-color: rgba(0,0,0,0.05)" onclick="saveSettings()" class="topbutton waves-effect waves-orange btn-flat">Lưu</a>
                </center>
                <table id="grid" class="highlight striped">
                    <thead>
                    <tr>
                        <th style="width:20px" data-type="string">Chọn?</th>
                        <th style="width:250px" data-type="string">Máy Chủ:</th>
                        <th style="width:300px" data-type="number">Độ Trễ:</th>
                        <th data-type="number">Trung Bình:</th>
                        <th style="width:20px" data-type="number"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="checkbox" id="ch_us-east-1" checked /><label style="top: 4px; left: 16px" for="ch_us-east-1"></label></td>
                        <td>US-East (Virginia)</td>
                        <td class="latency" id="us-east-1" endpoint="http://dynamodb.us-east-1.amazonaws.com/"></td>
                        <td></td>
                        <td><a onclick="checkButtonClicked(0)" class="waves-effect waves-orange btn-flat actionbutton">Kiểm tra</a><a onclick="clearLatency(0)" class="waves-effect waves-orange btn-flat actionbutton">Xóa</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="ch_us-east-2" checked /><label style="top: 4px; left: 16px" for="ch_us-east-2"></label></td>
                        <td>US East (Ohio)</td>
                        <td class="latency" id="us-east-2" endpoint="http://dynamodb.us-east-2.amazonaws.com/"></td>
                        <td></td>
                        <td><a onclick="checkButtonClicked(1)" class="waves-effect waves-orange btn-flat actionbutton">Kiểm tra</a><a onclick="clearLatency(1)" class="waves-effect waves-orange btn-flat actionbutton">Xóa</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="ch_us-west-1" checked /><label style="top: 4px; left: 16px" for="ch_us-west-1"></label></td>
                        <td>US-West (California)</td>
                        <td class="latency" id="us-west-1" endpoint="http://dynamodb.us-west-1.amazonaws.com/"></td>
                        <td></td>
                        <td><a onclick="checkButtonClicked(2)" class="waves-effect waves-orange btn-flat actionbutton">Kiểm tra</a><a onclick="clearLatency(2)" class="waves-effect waves-orange btn-flat actionbutton">Xóa</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="ch_us-west-2" checked /><label style="top: 4px; left: 16px" for="ch_us-west-2"></label></td>
                        <td>US-West (Oregon)</td>
                        <td class="latency" id="us-west-2" endpoint="http://dynamodb.us-west-2.amazonaws.com/"></td>
                        <td></td>
                        <td><a onclick="checkButtonClicked(3)" class="waves-effect waves-orange btn-flat actionbutton">Kiểm tra</a><a onclick="clearLatency(3)" class="waves-effect waves-orange btn-flat actionbutton">Xóa</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="ch_ca-central-1" checked /><label style="top: 4px; left: 16px" for="ch_ca-central-1"></label></td>
                        <td>Canada (Central)</td>
                        <td class="latency" id="ca-central-1" endpoint="http://dynamodb.ca-central-1.amazonaws.com/"></td>
                        <td></td>
                        <td><a onclick="checkButtonClicked(4)" class="waves-effect waves-orange btn-flat actionbutton">Kiểm tra</a><a onclick="clearLatency(4)" class="waves-effect waves-orange btn-flat actionbutton">Xóa</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="ch_eu-west-1" checked /><label style="top: 4px; left: 16px" for="ch_eu-west-1"></label></td>
                        <td>Europe (Ireland)</td>
                        <td class="latency" id="eu-west-1" endpoint="http://dynamodb.eu-west-1.amazonaws.com/"></td>
                        <td></td>
                        <td><a onclick="checkButtonClicked(5)" class="waves-effect waves-orange btn-flat actionbutton">Kiểm tra</a><a onclick="clearLatency(5)" class="waves-effect waves-orange btn-flat actionbutton">Xóa</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="ch_eu-west-2" checked /><label style="top: 4px; left: 16px" for="ch_eu-west-2"></label></td>
                        <td>Europe (London)</td>
                        <td class="latency" id="eu-west-2" endpoint="http://dynamodb.eu-west-2.amazonaws.com/"></td>
                        <td></td>
                        <td><a onclick="checkButtonClicked(6)" class="waves-effect waves-orange btn-flat actionbutton">Kiểm tra</a><a onclick="clearLatency(6)" class="waves-effect waves-orange btn-flat actionbutton">Xóa</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="ch_eu-central-1" checked /><label style="top: 4px; left: 16px" for="ch_eu-central-1"></label></td>
                        <td>Europe (Frankfurt)</td>
                        <td class="latency" id="eu-central-1" endpoint="http://dynamodb.eu-central-1.amazonaws.com/"></td>
                        <td></td>
                        <td><a onclick="checkButtonClicked(7)" class="waves-effect waves-orange btn-flat actionbutton">Kiểm tra</a><a onclick="clearLatency(7)" class="waves-effect waves-orange btn-flat actionbutton">Xóa</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="ch_ap-south-1" checked /><label style="top: 4px; left: 16px" for="ch_ap-south-1"></label></td>
                        <td>Asia Pacific (Mumbai)</td>
                        <td class="latency" id="ap-south-1" endpoint="http://dynamodb.ap-south-1.amazonaws.com/"></td>
                        <td></td>
                        <td><a onclick="checkButtonClicked(8)" class="waves-effect waves-orange btn-flat actionbutton">Kiểm tra</a><a onclick="clearLatency(8)" class="waves-effect waves-orange btn-flat actionbutton">Xóa</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="ch_ap-northeast-2" checked /><label style="top: 4px; left: 16px" for="ch_ap-northeast-2"></label></td>
                        <td>Asia Pacific (Seoul)</td>
                        <td class="latency" id="ap-northeast-2" endpoint="http://dynamodb.ap-northeast-2.amazonaws.com/"></td>
                        <td></td>
                        <td><a onclick="checkButtonClicked(9)" class="waves-effect waves-orange btn-flat actionbutton">Kiểm tra</a><a onclick="clearLatency(9)" class="waves-effect waves-orange btn-flat actionbutton">Xóa</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="ch_ap-southeast-1" checked /><label style="top: 4px; left: 16px" for="ch_ap-southeast-1"></label></td>
                        <td>Asia Pacific (Singapore)</td>
                        <td class="latency" id="ap-southeast-1" endpoint="http://dynamodb.ap-southeast-1.amazonaws.com/"></td>
                        <td></td>
                        <td><a onclick="checkButtonClicked(10)" class="waves-effect waves-orange btn-flat actionbutton">Kiểm tra</a><a onclick="clearLatency(10)" class="waves-effect waves-orange btn-flat actionbutton">Xóa</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="ch_ap-southeast-2" checked /><label style="top: 4px; left: 16px" for="ch_ap-southeast-2"></label></td>
                        <td>Asia Pacific (Sydney)</td>
                        <td class="latency" id="ap-southeast-2" endpoint="http://dynamodb.ap-southeast-2.amazonaws.com/"></td>
                        <td></td>
                        <td><a onclick="checkButtonClicked(11)" class="waves-effect waves-orange btn-flat actionbutton">Kiểm tra</a><a onclick="clearLatency(11)" class="waves-effect waves-orange btn-flat actionbutton">Xóa</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="ch_ap-northeast-1" checked /><label style="top: 4px; left: 16px" for="ch_ap-northeast-1"></label></td>
                        <td>Asia Pacific (Tokyo)</td>
                        <td class="latency" id="ap-northeast-1" endpoint="http://dynamodb.ap-northeast-1.amazonaws.com/"></td>
                        <td></td>
                        <td><a onclick="checkButtonClicked(12)" class="waves-effect waves-orange btn-flat actionbutton">Kiểm tra</a><a onclick="clearLatency(12)" class="waves-effect waves-orange btn-flat actionbutton">Xóa</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="ch_sa-east-1" checked /><label style="top: 4px; left: 16px" for="ch_sa-east-1"></label></td>
                        <td>South America (Sao Paulo)</td>
                        <td class="latency" id="sa-east-1" endpoint="http://dynamodb.sa-east-1.amazonaws.com/"></td>
                        <td></td>
                        <td><a onclick="checkButtonClicked(13)" class="waves-effect waves-orange btn-flat actionbutton">Kiểm tra</a><a onclick="clearLatency(13)" class="waves-effect waves-orange btn-flat actionbutton">Xóa</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="ch_cn-north-1" checked /><label style="top: 4px; left: 16px" for="ch_cn-north-1"></label></td>
                        <td>China (Beijing)</td>
                        <td class="latency" id="cn-north-1" endpoint="http://dynamodb.cn-north-1.amazonaws.com.cn/"></td>
                        <td></td>
                        <td><a onclick="checkButtonClicked(14)" class="waves-effect waves-orange btn-flat actionbutton">Kiểm tra</a><a onclick="clearLatency(14)" class="waves-effect waves-orange btn-flat actionbutton">Xóa</a></td>
                    </tr>
                    </tbody>
                </table>
                <div class="divider"></div><div id="imageCell"></div><br>
                <center>
                    <a class="orange waves-effect waves-light btn tooltipped pulse" data-position="top" data-delay="50" data-tooltip="Đo ping của bạn" type="submit" id="pingbutton" onclick="Materialize.toast('Checking your ping!', 3500)">Ping</a>
                    <a class="orange waves-effect waves-light btn tooltipped" href="#modalinfo" data-position="top" data-delay="50" data-tooltip="Đọc F.A.Q.">Trợ giúp</a>
                    <a class="orange waves-effect waves-light btn tooltipped" href="#modalservers" data-position="top" data-delay="50" data-tooltip="Danh sách tất cả máy chủ AWS">Danh sách</a>
                    <a class='dropdown-button orange waves-effect waves-light btn tooltipped' data-position="top" data-delay="50" data-tooltip="Đổi ngôn ngữ" href='#' data-activates='langdropdown'>Ngôn ngữ</a>
                </center>

                <ul id='langdropdown' class='dropdown-content'>
                    <li><a href="/en">English</a></li>
                    <li class="divider"></li>
                    <li><a href="/ru">Русский</a></li>
                    <li class="divider"></li>
                    <li><a href="/es">Español</a></li>
                    <li class="divider"></li>
                    <li><a href="/fr">Français</a></li>
                    <li class="divider"></li>
                    <li><a href="/cn">中文</a></li>
                    <li class="divider"></li>
                    <li><a href="/vi">Vietnamese</a></li>
                </ul>

                <div id="modalinfo" class="modal modal-fixed-footer">
                    <div class="modal-content">
                        <h4>Trợ giúp</h4><div class="divider"></div>
                        <br>
                        <b>Nếu bạn có bất kỳ ý tưởng nào để cải thiện trang web này, vui lòng sử dụng form dưới đây! Vui lòng sử dụng tiếng Nga hoặc tiếng Anh</b>
                        <div class="row">
                            <div id="feedbackdiv" class="input-field col s9">
                                <textarea id="feedbackarea" class="materialize-textarea" length="500"></textarea>
                                <label style="top: 4px; left: 16px" for="feedbackarea">Text...</label>
                            </div>
                            <div class="col s3"><a onclick="sendfeedback();" style="height: 100px; padding-top: 23%;" class="waves-effect waves-orange btn-flat">Gửi</a></div>
                        </div>
                        <p><b>Nguồn</b> - Bạn có thể xem nguồn của trang web trên github <a href="https://github.com/Disquse/PUBGServersPing">GitHub</a>. trước khi sử dụng, đọc giấy phép! Tự do đóng góp, báo cáo các vấn đề gặp phải!</p>
                        <p><b>Tôi có ping tốt, nhưng tôi vẫn bị lag</b> - Máy chủ game bị quá tải, đó là lý do tại sao bạn bị lag. Bạn có thể thử chơi trên các máy chủ khác. Vấn đề ping lớn nhỏ hơn nhiều vấn để quá tải máy chủ. Không may là hiện tại chúng tôi chưa thể kiểm tra tình trạng quá tải của máy chủ....</p>
                        <p><b>Tại sao?</b> - Rất khó để kiểm tra ping của bạn đến các máy chủ PUBG. Bạn không thể kiểm tra nó trực tiếp ở trong game.</p>
                        <p><b>Nó làm việc thế nào?</b> - Trang web này sẽ gửi yêu cầu http tới máy chủ của AWS mà PUBG đang sử dụng. Đây là yêu cầu từ máy tính của bạn, nên ping là chính xác.</p>
                        <p><b>Sắp xếp?</b> - Nhấn vào tiêu đề cột để sắp xếp. Sử dụng sau khi bạn đã kiểm tra ping.</p>
                        <p><b>Cái này cho ai?</b> - Cho người chơi PUBG, Banda và rabotyag <i><3</i></p>
                        <p><b>Làm sao để liên hệ?</b> - Bạn có thể đăng nhập vào website chính thức của tôi: <a href="http://disquse.ru">disquse.ru</a></p>
                        <p><b>Cảm ơn tới:</b><br><a href="https://github.com/nino6454">nino6454</a> cho bản dịch Spanish</p>
                        <p><a href="https://github.com/Cethiel">Cethiel</a> cho bản dịch French</p>
                        <p><a href="https://github.com/ngocnh">NgocNH</a> cho bản dịch Vietnamesse</p>
                    </div>
                    <div class="modal-footer">
                        <a class="modal-action modal-close waves-effect waves-orange btn-flat">Đóng</a>
                    </div>
                </div>
                <div id="modalservers" class="modal modal-fixed-footer">
                    <div class="modal-content">
                        <h4>Danh sách tất cả máy chủ AWS</h4><div class="divider"></div>
                        AWS (Amazon Web Services) - đây là công ty cung cấp dịch vụ máy chủ cho PUBG. Không phải tất cả đều được sử dụng trong game, nhưng có đầy đủ danh sách IP máy chủ. Thông tin này có thể hữu ích cho bạn:<br><br>

                        <?php echo(file_get_contents("pages/servers.html")); ?>
                    </div>
                    <div class="modal-footer">
                        <a class="modal-action modal-close waves-effect waves-orange btn-flat">Đóng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script type="text/javascript">
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires="+ d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for(var i = 0; i <ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        $(document).ready(function() {
            $("#pingbutton").click(pingButtonClicked);
            if (getURLParameter("run")) {
                $("#pingbutton").click();
            }

            $('.modal').modal();
            $("body").css("display", "none");
            $("body").fadeIn(500);

            $("a.transition").click(function(event){
                event.preventDefault();
                linkLocation = this.href;
                $("body").fadeOut(500, redirectPage);
            });

            function redirectPage() {
                window.location = linkLocation;
            }

            loadSettings();
        });

        $(window).on('load', function () {
            var $preloader = $('#preloader'),
                $spinner = $preloader.find('.spinner');
            $spinner.delay(700).fadeOut('slow');
            $preloader.delay(1000).fadeOut('slow');
        });

        function disablePingButton() {
            $(".topbutton").attr("disabled", "disabled");
            $(".actionbutton").attr("disabled", "disabled");
            $("#pingbutton").attr("disabled", "disabled");
        };

        function enablePingButton() {
            $("#pingbutton").removeAttr("disabled");
            $(".topbutton").removeAttr("disabled");
            $(".actionbutton").removeAttr("disabled");
            Materialize.toast('Completed!', 2000);
        };

        $('th').click(function(){
            var table = $(this).parents('table').eq(0)
            var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
            this.asc = !this.asc
            if (!this.asc){rows = rows.reverse()}
            for (var i = 0; i < rows.length; i++){table.append(rows[i])}
        })
        function comparer(index) {
            return function(a, b) {
                var valA = getCellValue(a, index), valB = getCellValue(b, index)
                if ( valA == "" ) { valA = 9999 }
                if ( valB == "" ) { valB = 9999 }
                return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.localeCompare(valB)
            }
        }
        function getCellValue(row, index){ return $(row).children('td').eq(index).text() }

        function getURLParameter(name) {
            let regex = new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)');
            let matches = regex.exec(location.search);
            if (matches == null) {
                return null;
            }
            let val = matches[1];
            let value = val.replace(/\+/g, '%20');
            return decodeURIComponent(value);
        }

        function pingButtonClicked() {
            disablePingButton();
            let latencyBoxes = $(".latency").toArray();
            latencyBoxes.reverse();
            doNextBox(latencyBoxes);
        }

        function checkButtonClicked(index) {
            disablePingButton();
            let latencyBoxes = $(".latency").toArray();
            let latencyBox = [latencyBoxes[index]];
            let region = latencyBoxes[index].id;
            document.getElementById('ch_'+region).checked = true;
            doNextBox(latencyBox);
        }

        function clearLatency(index) {
            let latencyBoxes = $(".latency").toArray();
            let box = latencyBoxes[index];
            $(box).closest("td").next().html('');
            $(box).html('');
        }

        function clearAllLatency() {
            let boxes = $(".latency").toArray();
            boxes.forEach(function(box, index, array) {
                $(box).closest("td").next().html('');
                $(box).html('');
            });
        }

        function selectAll() {
            let boxes = $(".latency").toArray();
            boxes.forEach(function(box, index, array) {
                let boxid = box.id;
                document.getElementById('ch_'+boxid).checked = true;
            });
        }

        function unselectAll() {
            let boxes = $(".latency").toArray();
            boxes.forEach(function(box, index, array) {
                let boxid = box.id;
                document.getElementById('ch_'+boxid).checked = false;
            });
        }

        function selectAmerica() {
            unselectAll();
            let boxes = $(".latency").toArray();
            document.getElementById('ch_us-east-1').checked = true;
            document.getElementById('ch_us-east-2').checked = true;
            document.getElementById('ch_us-west-1').checked = true;
            document.getElementById('ch_us-west-2').checked = true;
            document.getElementById('ch_ca-central-1').checked = true;
            document.getElementById('ch_sa-east-1').checked = true;
        }

        function selectEurope() {
            unselectAll();
            let boxes = $(".latency").toArray();
            document.getElementById('ch_eu-west-1').checked = true;
            document.getElementById('ch_eu-west-2').checked = true;
            document.getElementById('ch_eu-central-1').checked = true;
        }

        function selectAsia() {
            unselectAll();
            let boxes = $(".latency").toArray();
            document.getElementById('ch_ap-south-1').checked = true;
            document.getElementById('ch_ap-northeast-2').checked = true;
            document.getElementById('ch_ap-southeast-1').checked = true;
            document.getElementById('ch_ap-southeast-2').checked = true;
            document.getElementById('ch_ap-northeast-1').checked = true;
            document.getElementById('ch_cn-north-1').checked = true;
        }

        function doNextBox(latencyBoxes) {
            var box = latencyBoxes.pop();
            if (box) {
                var region = box.id;
                if ( document.getElementById('ch_'+region).checked ) {
                    let endpoint = box.getAttribute("endpoint");
                    ping_connect(box, region, endpoint, latencyBoxes);
                } else {
                    doNextBox(latencyBoxes);
                }
            } else {
                enablePingButton();
            }
        }

        function pingQuality(ping) {
            let quality = ping/300;
            if ( quality > 1 ) {
                quality = 1;
            } else if ( quality < 0 ) {
                quality = 0;
            }
            return quality;
        }

        var imageCell = $("#imageCell")
        function ping_endpoint(endpoint, onComplete) {
            let randomString = Math.floor(Math.random()*0xFFFFFFFFFFFFFFFF).toString(36);
            let targetUrl = endpoint + "ping?x=" + randomString;
            imageCell.empty();
            imageCell.html("<img id='pingImage' style='display: none'>");
            let pingImage = $("#pingImage");
            pingImage.error(onComplete);
            pingImage.attr("src", targetUrl);
        }

        function currentTimeMillis() {
            return Date.now();
        }

        var results = [];
        function ping_connect(box, region, endpoint, latencyBoxes) {
            ping_endpoint(endpoint, function() {
                var startTime = currentTimeMillis();
                ping_endpoint(endpoint, function() {
                    let endTime = currentTimeMillis();
                    let elapsed = endTime - startTime;
                    let resultText = elapsed.toString();
                    let quality = pingQuality(elapsed);
                    let red = parseInt(255*quality);
                    let green = parseInt(255-red);
                    $(box).append('<span style="color:rgba('+red+', '+green+', 0, 1.0); font-weight:900;">'+resultText+'</span> ');
                    results.push(resultText)

                    let numbers = $(box).text().split(' ').filter(parseFloat)
                    let summary = numbers.reduce(function add(a, b) { return parseFloat(a) + parseFloat(b);},0)
                    let avg = Math.round(summary/numbers.length)
                    let avgquality = pingQuality(avg);
                    let avgred = parseInt(255*avgquality);
                    let avggreen = parseInt(255-avgred);
                    $(box).closest("td").next().html('<span style="color:rgba('+avgred+', '+avggreen+', 0, 1.0); font-weight:900;">'+avg+'</span>')
                    doNextBox(latencyBoxes);
                });
            });
        }

        function sendfeedback() {
            let feedbacktext = document.getElementById('feedbackarea').value;
            if ( feedbacktext.trim() == "" ) {
                $( "#feedbackdiv" ).fadeOut( "slow", function() {
                    document.getElementById('feedbackdiv').innerHTML = "<center><h5>Empty message? :(</center><br><br>";
                    $( "#feedbackdiv" ).fadeIn("slow", function() {
                        setTimeout(function() {
                            $( "#feedbackdiv" ).fadeOut("slow", function() {
                                document.getElementById('feedbackdiv').innerHTML = '<textarea id="feedbackarea" class="materialize-textarea" length="500"></textarea><label style="top: 4px; left: 16px" for="feedbackarea">Text...</label>';
                                $( "#feedbackdiv" ).fadeIn("slow");
                            });
                        }, 1000);
                    });
                });
            } else {
                savefeedback(feedbacktext);
                $( "#feedbackdiv" ).fadeOut("slow", function() {
                    document.getElementById('feedbackdiv').innerHTML = "<center><h5>Thanks!</h5>We're saved your feedback!</center><br>";
                    $( "#feedbackdiv" ).fadeIn("slow", function() {
                        setTimeout(function() {
                            $( "#feedbackdiv" ).fadeOut( "slow", function() {
                                document.getElementById('feedbackdiv').innerHTML = '<textarea id="feedbackarea" class="materialize-textarea" length="500"></textarea><label style="top: 4px; left: 16px" for="feedbackarea">Text...</label>';
                                $( "#feedbackdiv" ).fadeIn("slow");
                            });
                        }, 1000);
                    });
                });
            }
        }

        function savefeedback(feedback) {
            var data = new FormData();
            data.append("data" , feedback);
            var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
            xhr.open( 'post', 'sendfeedback', true );
            xhr.send(data);
        }

        function saveSettings() {
            let boxes = $(".latency").toArray();
            boxes.forEach(function(box, index, array) {
                let boxid = box.id;
                setCookie('region'+index, document.getElementById('ch_'+boxid).checked, 30);
            });
            Materialize.toast('Your settings was saved', 2000);
        }

        function loadSettings() {
            let boxes = $(".latency").toArray();
            boxes.forEach(function(box, index, array) {
                let boxid = box.id;
                if ( getCookie('region'+index) == 'false' ) {
                    document.getElementById('ch_'+boxid).checked = false;
                } else {
                    document.getElementById('ch_'+boxid).checked = true;
                }
            });
        }
    </script>
<?php foot(); ?>
