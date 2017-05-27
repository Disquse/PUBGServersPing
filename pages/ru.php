<?php head(); ?>
<nav><div class="orange nav-wrapper"><a href="/" class="white-text brand-logo center">PUBG SERVERS PING <small class="hoverable version">v2</small></a></div></nav>
<div class="container row">
	<br><div class="col s12 m10 l8 offset-m1 offset-l2">
        <div class="card-panel" style="padding: 18px;">
			<center><b>Этот сайт был сделан для <a href="http://twitch.tv/beastqt">BeastQT</a>. Он замечательный русский стример!</b></center><br><div class="divider"></div>
			<table id="grid" class="highlight striped">
				<thead>
					<tr>
						<th data-type="string">Сервер:</th>
						<th data-type="number">Задержка (мс):</th>
					</tr>
				</thead>
				<tbody>	
					<tr>
						<td>US-East (Virginia)</td>
						<td class="latency" id="us-east-1" endpoint="http://dynamodb.us-east-1.amazonaws.com/">&nbsp;</td>
					</tr>
					<tr>
						<td>US East (Ohio)</td>
						<td class="latency" id="us-east-2" endpoint="http://dynamodb.us-east-2.amazonaws.com/">&nbsp;</td>
					</tr>
					<tr>
						<td>US-West (California)</td>
						<td class="latency" id="us-west-1" endpoint="http://dynamodb.us-west-1.amazonaws.com/">&nbsp;</td>
					</tr>
					<tr>
						<td>US-West (Oregon)</td>
						<td class="latency" id="us-west-2" endpoint="http://dynamodb.us-west-2.amazonaws.com/">&nbsp;</td>
					</tr>
					<tr>
						<td>Canada (Central)</td>
						<td class="latency" id="ca-central-1" endpoint="http://dynamodb.ca-central-1.amazonaws.com/">&nbsp;</td>
					</tr>
					<tr>
						<td>Europe (Ireland)</td>
						<td class="latency" id="eu-west-1" endpoint="http://dynamodb.eu-west-1.amazonaws.com/">&nbsp;</td>
					</tr>
					<tr>
						<td>Europe (London)</td>
						<td class="latency" id="eu-west-2" endpoint="http://dynamodb.eu-west-2.amazonaws.com/">&nbsp;</td>
					</tr>
					<tr>
						<td>Europe (Frankfurt)</td>
						<td class="latency" id="eu-central-1" endpoint="http://dynamodb.eu-central-1.amazonaws.com/">&nbsp;</td>
					</tr>
					<tr>
						<td>Asia Pacific (Mumbai)</td>
						<td class="latency" id="ap-south-1" endpoint="http://dynamodb.ap-south-1.amazonaws.com/">&nbsp;</td>
					</tr>
					<tr>
						<td>Asia Pacific (Seoul)</td>
						<td class="latency" id="ap-northeast-2" endpoint="http://dynamodb.ap-northeast-2.amazonaws.com/">&nbsp;</td>
					</tr>
					<tr>
						<td>Asia Pacific (Singapore)</td>
						<td class="latency" id="ap-southeast-1" endpoint="http://dynamodb.ap-southeast-1.amazonaws.com/">&nbsp;</td>
					</tr>
					<tr>
						<td>Asia Pacific (Sydney)</td>
						<td class="latency" id="ap-southeast-2" endpoint="http://dynamodb.ap-southeast-2.amazonaws.com/">&nbsp;</td>
					</tr>
					<tr>
						<td>Asia Pacific (Tokyo)</td>
						<td class="latency" id="ap-northeast-1" endpoint="http://dynamodb.ap-northeast-1.amazonaws.com/">&nbsp;</td>
					</tr>
					<tr>
						<td>South America (Sao Paulo)</td>
						<td class="latency" id="sa-east-1" endpoint="http://dynamodb.sa-east-1.amazonaws.com/">&nbsp;</td>
					</tr>
					<tr>
						<td>China (Beijing)</td>
						<td class="latency" id="cn-north-1" endpoint="http://dynamodb.cn-north-1.amazonaws.com.cn/">&nbsp;</td>
					</tr>
					<tr>
						<td>AWS GovCloud (US)</td>
						<td class="latency" id="us-gov-west-1" endpoint="http://dynamodb.us-gov-west-1.amazonaws.com/">&nbsp;</td>
					</tr>
				</tbody>
			</table>
			<div class="divider"></div><div id="imageCell"></div><br>
			<center>
				<a class="orange waves-effect waves-light btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Замерить задержку до серверов" type="submit" id="pingbutton" onclick="Materialize.toast('Проверяем задержку!', 3500)">Пинговать</a>
				<a class="orange waves-effect waves-light btn tooltipped" href="#modal1" data-position="bottom" data-delay="50" data-tooltip="Прочитать справку">Помощь</a>
				<a class="orange waves-effect waves-light btn tooltipped" href="#modal2" data-position="bottom" data-delay="50" data-tooltip="Всех серверов AWS">Список</a>
				<a class='dropdown-button orange waves-effect waves-light btn tooltipped' data-position="bottom" data-delay="50" data-tooltip="Изменить язык сайта" href='#' data-activates='dropdown1'>Язык</a>
			</center>
			
			<ul id='dropdown1' class='dropdown-content'>
				<li><a href="/en">English</a></li>
				<li class="divider"></li>
				<li><a href="/ru">Русский</a></li>
			</ul>
			
			<div id="modal1" class="modal modal-fixed-footer">
				<div class="modal-content">
					<h4>Помощь</h4><div class="divider"></div>
					<br>
					<b>Если у вас есть отзыв/предложение/замечание - пишите в форму ниже! Только Русский и Английский язык!</b>
					<div class="row">
						<div id="feedbackdiv" class="input-field col s9">	
							<textarea id="feedbackarea" class="materialize-textarea" length="500"></textarea>
							<label for="feedbackarea">Отправьте ваш отзыв/предложение/замечание...</label>
						</div>
						<div class="col s3"><a onclick="sendfeedback();" style="height: 100px; padding-top: 23%;" class="waves-effect waves-orange btn-flat">Отправить</a></div>
					</div>
					<p><b>Исходники сайта</b> - Вы можете найти исходники этого сайта на <a href="https://github.com/Disquse/PUBGServersPing">GitHub</a>. Перед использованием обязательно прочитайте лицензию! Не стесняйтесь предлагать вносить в сайт какие-то изменения, сообщать о багах и другом!</p>
					<p><b>У меня хороший пинг, но сервера лагают!</b> - На данный момент проблема серверов в PUBG далеко не в задержке. Они очень сильно перегруженны. Вы можете попробовать поиграть на другом регионе. Большой пинг не такая большая проблема, как перегруженные сервера. Из-за этого все эти лаги. К сожалению, замерять нагрузку мы не можем...</p>
					<p><b>Зачем это?</b> - На данный момент в PUBG очень сложно узнать свой реальный пинг. Необходимо узнавать адрес сервера в Мониторе ресурсов, будучи в игре, и пропинговать адрес через консоль. На этом же сайте все быстро и удобно!</p>
					<p><b>Как это работает?</b> - Сайт отправляет запрос от вашего браузера до всех возможных серверов игры. PUBG использует сервера Amazon Web Services, сайт пингует именно их. Возможно, не все они используются в игре. Максимально точное вычисление задержки на данный момент.</p>
					<p><b>Сортировка?</b> - Нажмите на заголовок таблицы, чтобы отсортировать ее по серверу или по пингу (для точности сортируйте после прохождение полного теста).</p>
					<p><b>Результаты всегда разные, это нормально?</b> - Пинг постоянно меняется и это норма. Замерьте 10 раз и выпишите минимальный и максимальный результат. Это и будет примерный диапазон возможной задержки. То есть в нормальных условиях пинг всегда будет плюс-минус таким.</p>
					<p><b>Для кого это?</b> - Для игроков этой игры, Банды и работяг <i><3</i></p>
					<p><b>Как связаться с автором?</b> - Все нужные ссылки вы можете найти на основном сайте: <a href="http://disquse.ru">disquse.ru</a></p>
				</div>
				<div class="modal-footer">
					<a class="modal-action modal-close waves-effect waves-orange btn-flat">Закрыть</a>
				</div>
			</div>
			<div id="modal2" class="modal modal-fixed-footer">
				<div class="modal-content">
					<h4>Список всех серверов AWS</h4><div class="divider"></div>
					AWS (Amazon Web Services) - это компания, поставляющая PUBG (и многим другим) свои сервера. Это просто общий список для ознакомления. Далеко не все из них используются в самой игре и многие из них находятся на одном сервере (что значит что задержка будет идентична):<br><br>
					
					<?php echo(file_get_contents("pages/servers.html")); ?>
				</div>
				<div class="modal-footer">
					<a class="modal-action modal-close waves-effect waves-orange btn-flat">Закрыть</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script type="text/javascript">
	var pingButton = $("#pingbutton");

	function disablePingButton() {
		pingButton.attr("disabled", "disabled");
	};

	function enablePingButton() {
		pingButton.removeAttr("disabled");
		Materialize.toast('Готово!', 2000);
		
		var grid = document.getElementById('grid');
		grid.onclick = function(e) {
			if (e.target.tagName != 'TH') return;
			sortGrid(e.target.cellIndex, e.target.getAttribute('data-type'));
		};
		
		function sortGrid(colNum, type) {
			var tbody = grid.getElementsByTagName('tbody')[0];
			var rowsArray = [].slice.call(tbody.rows);
			var compare;
			switch (type) {
				case 'number':
					compare = function(rowA, rowB) {
					return rowA.cells[colNum].innerHTML - rowB.cells[colNum].innerHTML;
				};
				break;
				case 'string':
					compare = function(rowA, rowB) {
					return rowA.cells[colNum].innerHTML > rowB.cells[colNum].innerHTML ? 1 : -1;
				};
				break;
			}
			rowsArray.sort(compare);
			grid.removeChild(tbody);
			for (var i = 0; i < rowsArray.length; i++) {
				tbody.appendChild(rowsArray[i]);
			}
			grid.appendChild(tbody);
		}
	};

	function getURLParameter(name) {
		var regex = new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)');
		var matches = regex.exec(location.search);
		if (matches == null) {
			return null;
		}
		var value = matches[1];
		var value = value.replace(/\+/g, '%20');
		return decodeURIComponent(value);
	}

	$(document).ready(function() {
		$("#pingbutton").click(pingButtonClicked);
		if (getURLParameter("run")) {
			$("#pingbutton").click();
		}
	});

	function pingButtonClicked() {
		disablePingButton();
		var latencyBoxes = $(".latency").toArray();
		latencyBoxes.reverse();
		  doNextBox(latencyBoxes);
	}

	function doNextBox(latencyBoxes) {
		var box = latencyBoxes.pop();
		if (box) {
			var region = box.id;
			var endpoint = box.getAttribute("endpoint");
			step1_connect(box, region, endpoint, latencyBoxes);
		} else {
			enablePingButton();
		}
	}

	var imageCell = $("#imageCell")
	function ping_endpoint(endpoint, onComplete) {
		var randomString = Math.floor(Math.random()*0xFFFFFFFFFFFFFFFF).toString(36);
		var targetUrl = endpoint + "ping?x=" + randomString;
		imageCell.empty();
		imageCell.html("<img id='pingImage' style='display: none'>");
		var pingImage = $("#pingImage");
		pingImage.error(onComplete);
		pingImage.attr("src", targetUrl);
	}

	function step1_connect(box, region, endpoint, latencyBoxes) {
		$(box).html("Коннект");
		ping_endpoint(endpoint, function() { step2_ping(box, region, endpoint, latencyBoxes); });
	}

	function currentTimeMillis() {
		return (new Date()).getTime();
	}

	function step2_ping(box, region, endpoint, latencyBoxes) {
		$(box).html("Пингуем");
		var startTime = currentTimeMillis();
		ping_endpoint(endpoint, function() { step3_finish(startTime, box, region, endpoint, latencyBoxes); });
	}

	function step3_finish(startTime, box, region, endpoint, latencyBoxes) {
		var endTime = currentTimeMillis();
		var elapsed = endTime - startTime;
		var resultText = elapsed.toString();
		$(box).html(resultText);
		doNextBox(latencyBoxes);
	}
	
	$(window).on('load', function () {
		var $preloader = $('#preloader'),
		$spinner = $preloader.find('.spinner');
		$spinner.delay(700).fadeOut('slow');
		$preloader.delay(1000).fadeOut('slow');
	});

	$(document).ready(function() {	
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
	});
	
	function sendfeedback() {
		var feedbacktext = document.getElementById('feedbackarea').value;
		if ( feedbacktext.trim() == "" ) {
			$( "#feedbackdiv" ).fadeOut( "slow", function() {
				document.getElementById('feedbackdiv').innerHTML = "<center><h5>Пустое сообщение? :(</center><br><br>";
				$( "#feedbackdiv" ).fadeIn("slow", function() {
					setTimeout(function() {
						$( "#feedbackdiv" ).fadeOut("slow", function() {
							document.getElementById('feedbackdiv').innerHTML = '<textarea id="feedbackarea" class="materialize-textarea" length="500"></textarea><label for="feedbackarea">Текст...</label>';
							$( "#feedbackdiv" ).fadeIn("slow");
						});
					}, 1000);
				});
			});	
		} else {
			savefeedback(feedbacktext);
			$( "#feedbackdiv" ).fadeOut("slow", function() {
				document.getElementById('feedbackdiv').innerHTML = "<center><h5>Спасибо!</h5>Мы сохранили ваш отзыв!</center><br>";
				$( "#feedbackdiv" ).fadeIn("slow", function() {
					setTimeout(function() {
						$( "#feedbackdiv" ).fadeOut( "slow", function() {
							document.getElementById('feedbackdiv').innerHTML = '<textarea id="feedbackarea" class="materialize-textarea" length="500"></textarea><label for="feedbackarea">Текст...</label>';
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
</script>
<?php foot(); ?>