<?php

require('includes/Account.php');

/**
 * Johans konto
 */
$johans_konto = new Account('1234-56,789,012-3', 'Johan Nordström', 500);
$johans_konto->withdraw(49);

/**
 * Pelles konto
 */
$pelles_konto = new Account('2345-67,890,123-4', 'Pelle Svanslös');
$pelles_konto->deposit(100);
$pelles_konto->deposit(50);
$pelles_konto->withdraw(79);

/**
 * Mr Beast's konto
 */
$beasts_konto = new Account('1337-1337', 'Mr Beast', 1337000);

$accounts = [
	$johans_konto,
	$pelles_konto,
	$beasts_konto
];

echo "<h1>Kundfientlig bank nr 1</h1>";
foreach ($accounts as $account) {
	echo "<h2>{$account->getAccountNumber()}</h2>";
	echo "<h3>Owner: {$account->getOwner()}</h3>";
	echo "<p><strong>Balance:</strong> {$account->getBalance()}</p>";

	echo "<hr />";
}
