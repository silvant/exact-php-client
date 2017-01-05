<?php namespace Picqer\Financials\Exact;

/**
 * Class JournalStatusByFinancialPeriod
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialJournalStatusByFinancialPeriod
 * 
 * @property String $Journal Reference to Journal
 * @property Int32 $Period Financial period
 * @property Int32 $Year Financial year
 * @property String $JournalDescription Description of Journal
 * @property Int32 $JournalType Type of Journal 10=Cash, 12=Bank, 20=Sales, 21=Return invoice, 22=Purchase, 23=Received return invoice, 90=General journal
 * @property String $JournalTypeDescription Description of JournalType
 * @property Int32 $Status Journal status for this year and period 0=open, 1=closed
 * @property String $StatusDescription Description of Status
 */
class JournalStatusByFinancialPeriod extends Model
{
    use Query\Findable;
    use Query\Relatable;

    protected $fillable = [
        'Journal',
        'Period',
        'Year',
        'JournalDescription',
        'JournalType',
        'JournalTypeDescription',
        'Status',
        'StatusDescription'
    ];

    protected $url = 'read/financial/JournalStatusByFinancialPeriod';

}
