<?php

/* AdminBundle:CtDashboard:index.html.twig */
class __TwigTemplate_90cf0b0958d1e3124c4ac6ad03b998e6f6fe4c9d141c6ef50646aa84e929bc75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtDashboard:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2b77e5d7326934d1777eb3b75ef63c3ae6f9b078a2d8a7dcf361087e2021d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b77e5d7326934d1777eb3b75ef63c3ae6f9b078a2d8a7dcf361087e2021d2b->enter($__internal_d2b77e5d7326934d1777eb3b75ef63c3ae6f9b078a2d8a7dcf361087e2021d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtDashboard:index.html.twig"));

        $__internal_0849f55b3ae02080b71c19ffc25c3d3391e6ff2b994d6432328570c7be1cbc8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0849f55b3ae02080b71c19ffc25c3d3391e6ff2b994d6432328570c7be1cbc8a->enter($__internal_0849f55b3ae02080b71c19ffc25c3d3391e6ff2b994d6432328570c7be1cbc8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtDashboard:index.html.twig"));

        // line 5
        $context["menu_dashboard"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2b77e5d7326934d1777eb3b75ef63c3ae6f9b078a2d8a7dcf361087e2021d2b->leave($__internal_d2b77e5d7326934d1777eb3b75ef63c3ae6f9b078a2d8a7dcf361087e2021d2b_prof);

        
        $__internal_0849f55b3ae02080b71c19ffc25c3d3391e6ff2b994d6432328570c7be1cbc8a->leave($__internal_0849f55b3ae02080b71c19ffc25c3d3391e6ff2b994d6432328570c7be1cbc8a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_87a62dba1211ba7b5cea9e54218798b7d04dc9c4ce526f2c2d83ea90a71ffa9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a62dba1211ba7b5cea9e54218798b7d04dc9c4ce526f2c2d83ea90a71ffa9b->enter($__internal_87a62dba1211ba7b5cea9e54218798b7d04dc9c4ce526f2c2d83ea90a71ffa9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c7eb5567088aff2d2e3c6a10dfd057d2067833033ef50c280b827affccddc21b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7eb5567088aff2d2e3c6a10dfd057d2067833033ef50c280b827affccddc21b->enter($__internal_c7eb5567088aff2d2e3c6a10dfd057d2067833033ef50c280b827affccddc21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Tableau de bord ";
        
        $__internal_c7eb5567088aff2d2e3c6a10dfd057d2067833033ef50c280b827affccddc21b->leave($__internal_c7eb5567088aff2d2e3c6a10dfd057d2067833033ef50c280b827affccddc21b_prof);

        
        $__internal_87a62dba1211ba7b5cea9e54218798b7d04dc9c4ce526f2c2d83ea90a71ffa9b->leave($__internal_87a62dba1211ba7b5cea9e54218798b7d04dc9c4ce526f2c2d83ea90a71ffa9b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5f2c99239e80b45211e3474ca616de5240aeb359c56efb52dd9cd9941bb6852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5f2c99239e80b45211e3474ca616de5240aeb359c56efb52dd9cd9941bb6852->enter($__internal_c5f2c99239e80b45211e3474ca616de5240aeb359c56efb52dd9cd9941bb6852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_06cdcc1ede84c03ce3a8d54351b603be022b8e0ea572aff4aeb524020b9d5198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06cdcc1ede84c03ce3a8d54351b603be022b8e0ea572aff4aeb524020b9d5198->enter($__internal_06cdcc1ede84c03ce3a8d54351b603be022b8e0ea572aff4aeb524020b9d5198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "        <div class=\"callout callout-success\">
            ";
            // line 10
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 15
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 20
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 21
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    ";
        // line 26
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    Statistique en général
                </div>
                <div class=\"box-body\">
                    ";
        // line 34
        echo "                    <div class=\"col-lg-3 col-xs-6\">
                        <div class=\"small-box bg-aqua\">
                            <div class=\"inner\">
                                <h3>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["statistique"] ?? $this->getContext($context, "statistique")), "stat_visite", array()), "html", null, true);
        echo "</h3>
                                <p>Visite technique</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-settings\"></i>
                            </div>
                        </div>
                    </div>

                    ";
        // line 47
        echo "                    <div class=\"col-lg-3 col-xs-6\">
                        <div class=\"small-box bg-green\">
                            <div class=\"inner\">
                                <h3>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["statistique"] ?? $this->getContext($context, "statistique")), "stat_reception", array()), "html", null, true);
        echo "</h3>
                                <p>Réception</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-archive\"></i>
                            </div>
                        </div>
                    </div>

                    ";
        // line 60
        echo "                    <div class=\"col-lg-3 col-xs-6\">
                        <div class=\"small-box bg-gray\">
                            <div class=\"inner\">
                                <h3>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["statistique"] ?? $this->getContext($context, "statistique")), "stat_carte_grise", array()), "html", null, true);
        echo "</h3>
                                <p>Carte grise</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-card\"></i>
                            </div>
                        </div>
                    </div>

                    ";
        // line 73
        echo "                    <div class=\"col-lg-3 col-xs-6\">
                        <div class=\"small-box bg-red\">
                            <div class=\"inner\">
                                <h3>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute(($context["statistique"] ?? $this->getContext($context, "statistique")), "stat_contre_visite", array()), "html", null, true);
        echo "</h3>
                                <p>Contre visite</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-clipboard\"></i>
                            </div>
                        </div>
                    </div>

                    ";
        // line 86
        echo "                    <div class=\"col-lg-3 col-xs-6\">
                        <div class=\"small-box bg-yellow\">
                            <div class=\"inner\">
                                <h3>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute(($context["statistique"] ?? $this->getContext($context, "statistique")), "stat_cad", array()), "html", null, true);
        echo "</h3>
                                <p>Constatation avant dédouanement</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-clipboard\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_06cdcc1ede84c03ce3a8d54351b603be022b8e0ea572aff4aeb524020b9d5198->leave($__internal_06cdcc1ede84c03ce3a8d54351b603be022b8e0ea572aff4aeb524020b9d5198_prof);

        
        $__internal_c5f2c99239e80b45211e3474ca616de5240aeb359c56efb52dd9cd9941bb6852->leave($__internal_c5f2c99239e80b45211e3474ca616de5240aeb359c56efb52dd9cd9941bb6852_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtDashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 89,  207 => 86,  195 => 76,  190 => 73,  178 => 63,  173 => 60,  161 => 50,  156 => 47,  144 => 37,  139 => 34,  130 => 26,  127 => 24,  118 => 21,  113 => 20,  109 => 19,  106 => 18,  97 => 15,  94 => 14,  89 => 13,  80 => 10,  77 => 9,  72 => 8,  63 => 7,  44 => 3,  34 => 1,  32 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% block title %}{{ parent() }} Tableau de bord {% endblock %}

{% set menu_dashboard = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    
    {% for key, messages in app.session.flashbag.all() %}
        <div class=\"callout callout-{{ key }}\">
            {{ messages }} <br />
        </div>
    {% endfor %}

    {# Statistiques #}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    Statistique en général
                </div>
                <div class=\"box-body\">
                    {# Nombre de membres #}
                    <div class=\"col-lg-3 col-xs-6\">
                        <div class=\"small-box bg-aqua\">
                            <div class=\"inner\">
                                <h3>{{ statistique.stat_visite }}</h3>
                                <p>Visite technique</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-settings\"></i>
                            </div>
                        </div>
                    </div>

                    {# Réception #}
                    <div class=\"col-lg-3 col-xs-6\">
                        <div class=\"small-box bg-green\">
                            <div class=\"inner\">
                                <h3>{{ statistique.stat_reception }}</h3>
                                <p>Réception</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-archive\"></i>
                            </div>
                        </div>
                    </div>

                    {# Carte grise #}
                    <div class=\"col-lg-3 col-xs-6\">
                        <div class=\"small-box bg-gray\">
                            <div class=\"inner\">
                                <h3>{{ statistique.stat_carte_grise }}</h3>
                                <p>Carte grise</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-card\"></i>
                            </div>
                        </div>
                    </div>

                    {# Contre visite #}
                    <div class=\"col-lg-3 col-xs-6\">
                        <div class=\"small-box bg-red\">
                            <div class=\"inner\">
                                <h3>{{ statistique.stat_contre_visite }}</h3>
                                <p>Contre visite</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-clipboard\"></i>
                            </div>
                        </div>
                    </div>

                    {# Constatation avant dédouanement #}
                    <div class=\"col-lg-3 col-xs-6\">
                        <div class=\"small-box bg-yellow\">
                            <div class=\"inner\">
                                <h3>{{ statistique.stat_cad }}</h3>
                                <p>Constatation avant dédouanement</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-clipboard\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "AdminBundle:CtDashboard:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtDashboard/index.html.twig");
    }
}
