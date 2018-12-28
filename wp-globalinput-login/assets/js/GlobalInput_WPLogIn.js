(function()
{
	var formElement=document.getElementById("loginform");
	var wrap=document.createElement('p');
	var note=document.createElement('h3');
	note.style.padding="10px";
	note.innerHTML='Scan with your Global Input App';
	wrap.appendChild(note);

	qrCodeElement=document.createElement('p');
	qrCodeElement.style.padding="10px";
	qrCodeElement.style.backgroundColor="#FFFFFF";

	wrap.appendChild(qrCodeElement);

	formElement.parentNode.insertBefore(wrap,formElement);
	var globalinput={
						api:require("global-input-message"),
						connectToGlobalInputApp:function(){
								this.connector=globalinput.api.createMessageConnector();
								this.connector.connect(this.config);
						},
						displayQRCode:function(){
							var codedata=this.connector.buildInputCodeData();
							var qrcode = new QRCode(qrCodeElement, {
																	text: codedata,
																	width: 300,
																	height: 300,
																	colorDark : "#000000",
																	colorLight : "#ffffff",
																	correctLevel : QRCode.CorrectLevel.H
							});
						},
						config:{

												onSenderConnected:function()
																	{
																		wrap.style.display="none";
																	},
												onSenderDisconnected:function()
																		{
																			wrap.style.display="block";
																		},
												url:"https://globalinput.co.uk", //URL to your Global Input WebSocket Server
												apikey:"k7jc3QcMPKEXGW5UC",      //API Key for connecting to the Global Input Server
												connector:null,
												onRegistered:function(next){
                                    next();
                                    globalinput.displayQRCode();
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
						}

					};
					globalinput.connectToGlobalInputApp();

})();
