{% extends 'base.html' %}

{% load humanize %}

{% block title %} | Browse Property Listings {% endblock %}

{% block content %}

<section id="showcase-inner" class="py-5 text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h1 class="display-4">Browse Our Properties {{ name }}</h1>
                <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, pariatur!</p>
            </div>
        </div>
    </div>
</section>

<!-- Breadcrumb -->
<section id="bc" class="mt-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{% url 'index' %}">
                        <i class="fas fa-home"></i> Home</a>
                </li>
                <li class="breadcrumb-item active"> Browse Listings</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Listings -->
<section id="listings" class="py-4">
    <div class="container">
        <div class="row">
            {% if listings %}
                <!-- Individual Listings -->
                {% for listing in listings %}
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card listing-preview">
                        <img class="card-img-top" src="{{ listing.photo_main.url }}" alt="">
                        <div class="card-img-overlay">
                            <h2>
                                <span class="badge badge-secondary text-white">${{ listing.price | intcomma }}</span>
                            </h2>
                        </div>
                        <div class="card-body">
                            <div class="listing-heading text-center">
                                <h4 class="text-primary">{{ listing.title }}</h4>
                                <p>
                                    <i class="fas fa-map-marker text-secondary"></i> {{ listing.city }} {{ listing.state }}, {{ listing.zipcode }}</p>
                            </div>
                            <hr>
                            <div class="row py-2 text-secondary">
                                <div class="col-6">
                                    <i class="fas fa-th-large"></i> Sqft: {{ listing.sqft }}</div>
                                <div class="col-6">
                                    <i class="fas fa-car"></i> Garage: {{ listing.garage }}</div>
                            </div>
                            <div class="row py-2 text-secondary">
                                <div class="col-6">
                                    <i class="fas fa-bed"></i> Bedrooms: {{ listing.bedrooms }}</div>
                                <div class="col-6">
                                    <i class="fas fa-bath"></i> Bathrooms: {{ listing.bathrooms }}</div>
                            </div>
                            <hr>
                            <div class="row py-2 text-secondary">
                                <div class="col-12">
                                    <i class="fas fa-user"></i> {{ listing.realtor }}</div>
                            </div>
                            <div class="row text-secondary pb-2">
                                <div class="col-6">
                                    <i class="fas fa-clock"></i> {{ listing.list_date | timesince }}</div>
                            </div>
                            <hr>
                            <a href="{% url 'listing' listing.id %}" class="btn btn-primary btn-block">More Info</a>
                        </div>
                    </div>
                </div>
                {% endfor %}
            {% else %}
            <div class="col-md-12">
                <p>No Listings Available</p>
            </div>
            {% endif %}
        </div>

        <div class="row">
            <div class="col-md-12">
                {% if listings.has_other_pages %}
                    <ul class="pagination">
                        <!-- Previous page button -->
                        {% if listings.has_previous %}
                            <li class="page-item">
                                <a class="page-link" href="?page={{ listings.previous_page_number }}">&laquo;</a>
                            </li>
                        {% else %}
                            <li class="page-item disabled">
                                <a class="page-link">&laquo;</a>
                            </li>
                        {% endif %}
                        <!-- Loop through pages -->
                        {% for i in listings.paginator.page_range %}
                            {% if listings.number == i %}
                                <li class="page-item active">
                                    <a class="page-link">{{i}}</a>
                                </li>
                            {% else %}
                                <li class="page-item">
                                    <a class="page-link" href="?page={{i}}">{{i}}</a>
                                </li>
                            {% endif %}
                        {% endfor %}
                        <!-- Next page button -->
                        {% if listings.has_next %}
                            <li class="page-item">
                                <a class="page-link" href="?page={{ listings.next_page_number }}">&raquo;</a>
                            </li>
                        {% else %}
                            <li class="page-item disabled">
                                <a class="page-link">&raquo;</a>
                            </li>
                        {% endif %}
                    </ul>
                {% endif %}
            </div>
        </div>
    </div>
</section>
{% endblock %}