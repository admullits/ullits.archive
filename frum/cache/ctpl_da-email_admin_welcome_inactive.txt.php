<?php if (!defined('IN_PHPBB')) exit; ?>Subject: Velkommen til "<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>"

<?php echo (isset($this->_rootref['WELCOME_MSG'])) ? $this->_rootref['WELCOME_MSG'] : ''; ?>


Opbevar venligst denne email til fremtidig brug. Din kontoinformation er som følger:

----------------------------
Brugernavn: <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>

Kodeord: <?php echo (isset($this->_rootref['PASSWORD'])) ? $this->_rootref['PASSWORD'] : ''; ?>


Boardets URL: <?php echo (isset($this->_rootref['U_BOARD'])) ? $this->_rootref['U_BOARD'] : ''; ?>

----------------------------

Din konto er på nuværende tidspunkt ikke aktiveret og en boardadministrator skal aktivere den inden du kan logge ind. Du modtager en email, når dette er sket.

Glem venligst ikke dit kodeord, da det er blevet krypteret i vores database, og vi har ikke mulighed for at genfinde det til dig. Skulle det dog ske at du glemmer dit kodeord, kan du anmode om et nyt, som aktiveres på samme måde som denne konto.

Tak fordi du tilmeldte dig hos os.

<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>