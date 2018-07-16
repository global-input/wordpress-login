(function()
{
	var formElement=document.getElementById("loginform");
	qrCodeElement=document.createElement('p');
	qrCodeElement.style.padding="10px";
	qrCodeElement.style.backgroundColor="#FFFFFF";
	formElement.parentNode.insertBefore(qrCodeElement,formElement);
	var globalinput={
						api:require("global-input-message")
					};
	globalinput.config={
						onSenderConnected:function()
											{
												qrCodeElement.style.display="none";
											},
						onSenderDisconnected:function()
												{
													qrCodeElement.style.display="block";
												},
						initData:{
									action:"input",
									dataType:"form",
									form:{
											id:  "###username###@"+window.location.hostname+".wordpress",
											title: "Wordpress login",
											fields:[{
													label:"Username",
													id:"username",
													operations:
														{
															onInput:function(username)
															{
																document.getElementById("user_login").value=username;
															}
														}
													},
													{
														label:"Password",
														id:"password",
														type:"secret",
														operations:
														{
															onInput:function(password)
															{
																document.getElementById("user_pass").value=password;
															}
														}
													},
													{
														label:"Login",
														type:"button",
														operations:
															{
																onInput:function()
																{
																	document.getElementById("wp-submit").click();
																}
															}
													}]
											}
									}
						};
						globalinput.connector=globalinput.api.createMessageConnector();
						globalinput.connector.connect(globalinput.config);
						var codedata=globalinput.connector.buildInputCodeData();
						var qrcode = new QRCode(qrCodeElement, {
																text: codedata,
																width: 300,
																height: 300,
																colorDark : "#000000",
																colorLight : "#ffffff",
																correctLevel : QRCode.CorrectLevel.H
															});
})();