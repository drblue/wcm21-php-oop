<?php

require_once('includes/Account.php');
require_once('includes/Person.php');
require_once('includes/Transaction.php');
require('partials/header.php');

/**
 * 👶🏻👶🏼👶🏽
 */
$johan = new Person("Johan", "Nordström");
$pelle = new Person("Pelle", "Med-Svans");
$mr_beast = new Person("Mr", "Beast");
$linus = new Person("Linus", "Sebastian");

/**
 * Johans konto
 */
$johans_konto = new Account('1234-56,789,012-3', 500);
$johans_konto->withdraw(49, 'Caffe Latte');

$johans_sparkonto = new Account('1234-67,890,123-4', 1000);
$johans_sparkonto->deposit(500, 'Månadssparande', '2021-11-25');
$johans_sparkonto->deposit(500, 'Månadssparande', '2021-12-25');
$johans_sparkonto->deposit(500, 'Månadssparande');

$johan->addAccount($johans_konto);
$johan->addAccount($johans_sparkonto);

/**
 * Pelles konto
 */
$pelles_konto = new Account('2345-67,890,123-4');
$pelles_konto->deposit(100, 'Sålde iPhone till "sista priset kompis" på Blocket', '2021-12-24');
$pelles_konto->deposit(50, 'Återbetalning. H&M', '2022-01-20');
$pelles_konto->withdraw(79.99, 'Lunch');

$pelles_kreditkonto = new Account('2345-67,890,123-5');
$pelles_kreditkonto->withdraw(500, 'Blommor');

$pelle->addAccount($pelles_konto);
$pelle->addAccount($pelles_kreditkonto);

/**
 * Mr Beast's konto
 */
$beasts_konto = new Account('1337-1337', 1337000);
$beasts_konto->withdraw(1337000, 'LOL', '2022-01-01');
$beasts_konto->deposit(50);

$mr_beast->addAccount($beasts_konto);

echo "<pre>";

echo "<h3>Johan</h3>";

var_dump($johan);

echo "<h3>Pelle</h3>";
var_dump($pelle);

echo "<h3>Mr Beast</h3>";
var_dump($mr_beast);

echo "</pre>";

$people = [
	$johan,
	$pelle,
	$mr_beast
];

echo "<h1>Kundfientlig bank nr 1</h1>";

foreach ($people as $person) {
	echo "<h2>{$person->getFullName()}</h2>";

	foreach ($person->getAccounts() as $account) {
		echo "<h3>Kontonummer {$account->getAccountNumber()}</h3>";
		echo "Antal transaktioner på kontot: {$account->getTotalTransactions()}</p>";
		echo "Saldo: {$account->getBalance()} kr</p>";

		// echo "<h4>Transactions</h4>";
		// echo "<table class=\"table\">";

		// echo "<thead>";
		// echo "  <th>Date</th>";
		// echo "  <th>Amount</th>";
		// echo "  <th>Description</th>";
		// echo "</thead>";

		// echo "<tbody>";
		// foreach ($account->getTransactions() as $transaction) {
		// 	echo "<tr>";
		// 	echo "  <td>{$transaction->getDate()}</td>";
		// 	echo "  <td>{$transaction->getAmount()} kr</td>";
		// 	echo "  <td>{$transaction->getDescription()}</td>";
		// 	echo "</tr>";
		// }
		// echo "</tbody>";
		// echo "</table>";

	}

	echo "<hr />";
}

require('partials/footer.php');
