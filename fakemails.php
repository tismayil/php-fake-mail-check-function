<?php
/*
# List Created By : T.Ismayil
# GitHub : github.com/tismayil
*/

$FakeMailList = array(
	"armyspy.com","cuvox.de","dayrep.com","einrot.com",
	"fleckens.hu","gustr.com","jourrapide.com","rhyta.com",
	"superrito.com","teleworm.us","mp-j.cf","mp-j.gq",
	"hangxomcuatoilatotoro.cf","musicmakes.us",
	"sikomo.cf","moonm.review","udoiswell.pw","yaraon.ga",
	"gmxmail.top","kwalidd.cf","mahiidev.site","hamusoku.tk",
	"hamusoku.ga","reservelp.de","kucingarong.gq","zhorachu.com",
	"ethersports.org","tinoza.org","payperex2.com","nezdiro.org",
	"ether123.net","reftoken.net","averdov.com","axsup.net",
	"datum2.com","geronra.com","asorent.com","ether123.net",
	"ququb.com","2anom.com","qwfox.com","hvzoi.com",
	"fakeinbox.info","trash-mail.com","you-spam.com","re-gister.com",
	"fake-box.com","trash-me.com","opentrash.com","dropmail.me","emlhub.com",
	"emltmp.com","emlpro.com","yomail.info","10mail.org","mvrht.net",
	"kopqi.com","fxe.us","gicua.com","20mail.eu","10minutemail.co.uk",
	"vmani.com","wimsg.com","my10minutemail.com","10minutesmail.fr",
	"10minutemail.pro","10minutemailbox.com","10minutemail.be",
	"guerrillamail.biz","sharklasers.com","guerrillamail.info","grr.la",
	"guerrillamail.com","guerrillamail.de","guerrillamail.net","guerrillamail.org",
	"guerrillamailblock.com","pokemail.net","spam4.me","10minutemail.nl",
	"10minute-email.com"
);

function checkfakemail( $mail )
{
	Global $FakeMailList;

	@list($text , $domain) = explode("@" , $mail);
	if(!isset($domain))
	{
		return false;
	}

	foreach($FakeMailList as $mails)
	{
		if(stristr($mail , $mails))
		{
			return false;
		}
	}
	return true;
}

print " Fake mail : ".checkfakemail("demo@opentrash.com")."<hr/>";
print " Real mail : ".checkfakemail("tehmezovismayil@gmail.com")."<hr/>";


?>
