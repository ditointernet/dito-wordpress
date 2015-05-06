function ditoTopBarInit(){
  jQuery(function(){
    ditoEvents();
  });

  var user = dito.CurrentUser.get();
  if(user){
    ditoBuildUserBox(user);
  }
  else {
    ditoShowSignedOutBox();
  }

  ditoInsertPusher();
}

function ditoEvents(){
  jQuery(document)
    .on('click', '#dito-topbar-login-button', ditoShowLoginModal)
    .on('click', '#dito-topbar-login-close', ditoHideLoginModal)
    .on('click', '#dito-topbar-user-logout a', ditoLogout)
}

function ditoInsertPusher(){
  var $topbarContent = jQuery('#dito-topbar-content');
  var $body = jQuery('body');

  if(jQuery('#dito-pusher').length){
    var $pusher = jQuery('#dito-pusher');
  }
  else {
    var $pusher = jQuery('<div id="dito-pusher"></div>');
  }

  var height = $topbarContent.height();

  $pusher.css({ height: height + 'px' })

  $body.prepend($pusher);
}

function ditoShowLoginModal(){
  jQuery('#dito-topbar-login').removeClass('dito-hide');
}

function ditoHideLoginModal(){
  jQuery('#dito-topbar-login').addClass('dito-hide');
}

function ditoSigninUser(response){
  user = {}

  if(response.facebook){
    var facebook = response.facebook;
    user.fullName = facebook.name;
    user.pictureURL = '//graph.facebook.com/'+ facebook.id +'/picture'
  }
  else if(response.googlePlus){
    var googlePlus = response.googlePlus;
    user.fullName = googlePlus.displayName;
    user.pictureURL = googlePlus.picture;
  }

  if(user.fullName) user.name = user.fullName.split(' ')[0];

  if(response.dito.reference){
    var userToIdentify = jQuery.extend(user, { reference: response.dito.reference });
    dito.identify(userToIdentify);

    ditoBuildUserBox(user);
  }
}

function ditoBuildUserBox(user){
  var $greeting = jQuery('#dito-topbar-user-greeting');
  var $picture = jQuery('#dito-topbar-user-picture img');

  var greetingHTML = $greeting.html();

  $greeting.html(greetingHTML.replace('{{name}}', user.name));
  $picture.attr('src', user.pictureURL);

  ditoHideLoginModal();
  ditoShowSignedInBox();
}

function ditoShowSignedInBox(){
  jQuery('#dito-topbar-signed-out').hide();
  jQuery('#dito-topbar-signed-in').show();

  ditoInsertPusher();
}

function ditoShowSignedOutBox(){
  jQuery('#dito-topbar-signed-out').show();
  jQuery('#dito-topbar-signed-in').hide();

  ditoInsertPusher();
}

function ditoLogout(){
  var $greeting = jQuery('#dito-topbar-user-greeting');
  var $picture = jQuery('#dito-topbar-user-picture img');

  $picture.removeAttr('src');
  $greeting.html($greeting.attr('data-greeting-text'));

  dito.CurrentUser.logout();
  ditoShowSignedOutBox();
}