<?php head(); ?>
<nav><div class="orange nav-wrapper"><a href="/" class="white-text brand-logo center">PUBG SERVERS PING <small class="hoverable version">v2</small></a></div></nav>
<div class="container row">
	<br><div class="col s12 m10 l8 offset-m1 offset-l2">
        <div class="card-panel" style="padding: 18px;">
			<center><b>This site was created for <a href="http://twitch.tv/beastqt">BeastQT</a>. He is awesome russian streamer!</b></center><br><div class="divider"></div>
			<table id="grid" class="highlight striped">
				<thead>
					<tr>
						<th data-type="string">Server:</th>
						<th data-type="number">Latency (ms):</th>
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
				<a class="orange waves-effect waves-light btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Measure your ping" type="submit" id="pingbutton" onclick="Materialize.toast('Checking your ping!', 3500)">Ping</a>
				<a class="orange waves-effect waves-light btn tooltipped" href="#modal1" data-position="bottom" data-delay="50" data-tooltip="Read F.A.Q.">Help</a>
				<a class="orange waves-effect waves-light btn tooltipped" href="#modal2" data-position="bottom" data-delay="50" data-tooltip="List of all AWS servers">List</a>
				<a class='dropdown-button orange waves-effect waves-light btn tooltipped' data-position="bottom" data-delay="50" data-tooltip="Change language" href='#' data-activates='dropdown1'>Language</a>
			</center>
			
			<ul id='dropdown1' class='dropdown-content'>
				<li><a href="/en">English</a></li>
				<li class="divider"></li>
				<li><a href="/ru">Русский</a></li>
			</ul>
  
			<div id="modal1" class="modal modal-fixed-footer">
				<div class="modal-content">
					<h4>Help</h4><div class="divider"></div>
					<br>
					<b>Sorry for my english! If you have any ideas how to improve this site - use form below! Only Russian and English language!</b>
					<div class="row">
						<div id="feedbackdiv" class="input-field col s9">	
							<textarea id="feedbackarea" class="materialize-textarea" length="500"></textarea>
							<label for="feedbackarea">Text...</label>
						</div>
						<div class="col s3"><a onclick="sendfeedback();" style="height: 100px; padding-top: 23%;" class="waves-effect waves-orange btn-flat">Отправить</a></div>
					</div>
					<p><b>Sources</b> - You can check site's sources on <a href="https://github.com/Disquse/PUBGServersPing">GitHub</a>. Before using, read license! Feel free to contribute, report issues and other!</p>
					<p><b>I have good ping, but I'm lagging</b> - Main problem of PUBG servers is not ping. Game servers just overloaded, that's why you lagging. You can try play on another servers. Big ping is much smaller problem that overloaded servers. Unfortunately, we can't check servers load...</p>
					<p><b>Why?</b> - There is really hard to check your ping to PUBG servers. You can't check it directly from a game.</p>
					<p><b>How this works?</b> - This site sends http request to all AWS servers that PUBG use. This is client-side, so latency should be correct.</p>
					<p><b>Sorting?</b> - Press to column header to sort. Use it after ping test.</p>
					<p><b>Who is this for?</b> - For PUBG players, Banda and rabotyag <i><3</i></p>
					<p><b>How to contact you?</b> - You can check in on my main site: <a href="http://disquse.ru">disquse.ru</a></p>
				</div>
				<div class="modal-footer">
					<a class="modal-action modal-close waves-effect waves-orange btn-flat">Close</a>
				</div>
			</div>
			<div id="modal2" class="modal modal-fixed-footer">
				<div class="modal-content">
					<h4>List of all AWS servers</h4><div class="divider"></div>
					AWS (Amazon Web Services) - this company provides PUBG servers. Not all of them uses in a game, but there is full Server - IP list. Maybe this info can be useful for you:<br><br>
					
					<?php echo(file_get_contents("pages/servers.html")); ?>
				</div>
				<div class="modal-footer">
					<a class="modal-action modal-close waves-effect waves-orange btn-flat">Close</a>
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
		Materialize.toast('Completed!', 2000);
		
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
		$(box).html("Connecting");
		ping_endpoint(endpoint, function() { step2_ping(box, region, endpoint, latencyBoxes); });
	}

	function currentTimeMillis() {
		return (new Date()).getTime();
	}

	function step2_ping(box, region, endpoint, latencyBoxes) {
		$(box).html("Checking");
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
				document.getElementById('feedbackdiv').innerHTML = "<center><h5>Empty message? :(</center><br><br>";
				$( "#feedbackdiv" ).fadeIn("slow", function() {
					setTimeout(function() {
						$( "#feedbackdiv" ).fadeOut("slow", function() {
							document.getElementById('feedbackdiv').innerHTML = '<textarea id="feedbackarea" class="materialize-textarea" length="500"></textarea><label for="feedbackarea">Text...</label>';
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
							document.getElementById('feedbackdiv').innerHTML = '<textarea id="feedbackarea" class="materialize-textarea" length="500"></textarea><label for="feedbackarea">Text...</label>';
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