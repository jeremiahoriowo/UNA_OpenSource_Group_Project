<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class CreditNoteEstimateLineItemTier extends Model
{
  protected $allowed = [
    'lineItemId',
    'startingUnit',
    'endingUnit',
    'quantityUsed',
    'unitAmount',
    'startingUnitInDecimal',
    'endingUnitInDecimal',
    'quantityUsedInDecimal',
    'unitAmountInDecimal',
  ];

}

?>