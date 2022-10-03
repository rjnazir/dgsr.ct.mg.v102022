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
        $__internal_5a1a6d57cd5883f309f9b8ab5b29eb65d7ebdd0146e76e35804446e894d1eaa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a1a6d57cd5883f309f9b8ab5b29eb65d7ebdd0146e76e35804446e894d1eaa5->enter($__internal_5a1a6d57cd5883f309f9b8ab5b29eb65d7ebdd0146e76e35804446e894d1eaa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtDashboard:index.html.twig"));

        $__internal_bd1046648c4d3a781fd7261b158c197e9b164ecf3700d8e8fcaab59ddfc43508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1046648c4d3a781fd7261b158c197e9b164ecf3700d8e8fcaab59ddfc43508->enter($__internal_bd1046648c4d3a781fd7261b158c197e9b164ecf3700d8e8fcaab59ddfc43508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtDashboard:index.html.twig"));

        // line 5
        $context["menu_dashboard"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a1a6d57cd5883f309f9b8ab5b29eb65d7ebdd0146e76e35804446e894d1eaa5->leave($__internal_5a1a6d57cd5883f309f9b8ab5b29eb65d7ebdd0146e76e35804446e894d1eaa5_prof);

        
        $__internal_bd1046648c4d3a781fd7261b158c197e9b164ecf3700d8e8fcaab59ddfc43508->leave($__internal_bd1046648c4d3a781fd7261b158c197e9b164ecf3700d8e8fcaab59ddfc43508_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f512b4a11b64d632c4f1d868a1a985e7de7fafc5a3d89d8b2804d3c6179d8aba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f512b4a11b64d632c4f1d868a1a985e7de7fafc5a3d89d8b2804d3c6179d8aba->enter($__internal_f512b4a11b64d632c4f1d868a1a985e7de7fafc5a3d89d8b2804d3c6179d8aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f1b09508e0caf8e87a28a55dd78465eb6987df34a1495efbbc8c1ead2de88fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b09508e0caf8e87a28a55dd78465eb6987df34a1495efbbc8c1ead2de88fff->enter($__internal_f1b09508e0caf8e87a28a55dd78465eb6987df34a1495efbbc8c1ead2de88fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Tableau de bord ";
        
        $__internal_f1b09508e0caf8e87a28a55dd78465eb6987df34a1495efbbc8c1ead2de88fff->leave($__internal_f1b09508e0caf8e87a28a55dd78465eb6987df34a1495efbbc8c1ead2de88fff_prof);

        
        $__internal_f512b4a11b64d632c4f1d868a1a985e7de7fafc5a3d89d8b2804d3c6179d8aba->leave($__internal_f512b4a11b64d632c4f1d868a1a985e7de7fafc5a3d89d8b2804d3c6179d8aba_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0faa5b8b4b9aebaef84f54137f25337f612369cacf04b67f61104b355655cf96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0faa5b8b4b9aebaef84f54137f25337f612369cacf04b67f61104b355655cf96->enter($__internal_0faa5b8b4b9aebaef84f54137f25337f612369cacf04b67f61104b355655cf96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e7f026aae53ee2eeebc8c5a32e1394926bf79d9b946d4d43502be1cbd6bb6bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e7f026aae53ee2eeebc8c5a32e1394926bf79d9b946d4d43502be1cbd6bb6bc->enter($__internal_1e7f026aae53ee2eeebc8c5a32e1394926bf79d9b946d4d43502be1cbd6bb6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1e7f026aae53ee2eeebc8c5a32e1394926bf79d9b946d4d43502be1cbd6bb6bc->leave($__internal_1e7f026aae53ee2eeebc8c5a32e1394926bf79d9b946d4d43502be1cbd6bb6bc_prof);

        
        $__internal_0faa5b8b4b9aebaef84f54137f25337f612369cacf04b67f61104b355655cf96->leave($__internal_0faa5b8b4b9aebaef84f54137f25337f612369cacf04b67f61104b355655cf96_prof);

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
