<?php

namespace App\Models\Tenant\Calendar;

use App\Models\Tenant\Patient\Patient;
use App\Models\Tenant\User;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedicalDate extends Model
{
    use HasFactory, UsesTenantConnection, SoftDeletes;

    protected $fillable = [
        'id',
        'start_date',
        'end_date',
        'type_date',
        'description',
        'place',
        'user_id',
        'patient_id',
        'money',
        'patient_id',
        'date_type_id',
        'consent_id',
        'agreement_id',
        'status',
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function date_type(): BelongsTo
    {
        return $this->belongsTo(DateType::class, 'date_type_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function agreement(): BelongsTo
    {
        return $this->belongsTo(Agreement::class, 'agreement_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function consent(): BelongsTo
    {
        return $this->belongsTo(Consent::class, 'consent_id', 'id');
    }
}
