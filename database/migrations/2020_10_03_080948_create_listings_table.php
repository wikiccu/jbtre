<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
}

/**
     * Django Version
     * realtor = models.ForeignKey(Realtor, on_delete=models.DO_NOTHING) #Don't delete listings when this foreign key is deleted
     * title = models.CharField(max_length=200)
     * address = models.CharField(max_length=200)
     * city = models.CharField(max_length=100)
     * state = models.CharField(max_length=100)
     * zipcode = models.CharField(max_length=20)
     * description = models.TextField(blank=True) #Optional description, no max length
     * price = models.IntegerField()
     * bedrooms = models.IntegerField()
     * bathrooms = models.DecimalField(max_digits=2, decimal_places=1)
     * garage = models.IntegerField(default=0)
     * sqft = models.IntegerField()
     * lot_size = models.DecimalField(max_digits=5, decimal_places=1)
     * photo_main = models.ImageField(upload_to='photos/%Y/%m/%d/') #Save inside media folder under date structure
     * photo_1 = models.ImageField(upload_to='photos/%Y/%m/%d/', blank=True) #Optional extra photos
     * photo_2 = models.ImageField(upload_to='photos/%Y/%m/%d/', blank=True)
     * photo_3 = models.ImageField(upload_to='photos/%Y/%m/%d/', blank=True)
     * photo_4 = models.ImageField(upload_to='photos/%Y/%m/%d/', blank=True)
     * photo_5 = models.ImageField(upload_to='photos/%Y/%m/%d/', blank=True)
     * photo_6 = models.ImageField(upload_to='photos/%Y/%m/%d/', blank=True)
     * is_published = models.BooleanField(default=True)
     * list_date = models.DateTimeField(default=datetime.now, blank=True)
     * def __str__(self): #Show title as the identifier
     *     return self.title
     */
