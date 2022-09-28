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
        $__internal_4f0cbb0a070f4380ed35e2aafcd05278698fe525ac1d93f99e0cec6318c75a43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f0cbb0a070f4380ed35e2aafcd05278698fe525ac1d93f99e0cec6318c75a43->enter($__internal_4f0cbb0a070f4380ed35e2aafcd05278698fe525ac1d93f99e0cec6318c75a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtDashboard:index.html.twig"));

        $__internal_8021c171fbca938bbd96159c13fe94234f742bc22e125e84f9dfdd472fd57996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8021c171fbca938bbd96159c13fe94234f742bc22e125e84f9dfdd472fd57996->enter($__internal_8021c171fbca938bbd96159c13fe94234f742bc22e125e84f9dfdd472fd57996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtDashboard:index.html.twig"));

        // line 5
        $context["menu_dashboard"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f0cbb0a070f4380ed35e2aafcd05278698fe525ac1d93f99e0cec6318c75a43->leave($__internal_4f0cbb0a070f4380ed35e2aafcd05278698fe525ac1d93f99e0cec6318c75a43_prof);

        
        $__internal_8021c171fbca938bbd96159c13fe94234f742bc22e125e84f9dfdd472fd57996->leave($__internal_8021c171fbca938bbd96159c13fe94234f742bc22e125e84f9dfdd472fd57996_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_905b9ef5cd0e1bede2eaa3494350e84ad44bea4d886f0324a070c5a392a9390e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_905b9ef5cd0e1bede2eaa3494350e84ad44bea4d886f0324a070c5a392a9390e->enter($__internal_905b9ef5cd0e1bede2eaa3494350e84ad44bea4d886f0324a070c5a392a9390e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_881096746c82768192189772e3b0dec7602237508071588c4c75ee7d624f5e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881096746c82768192189772e3b0dec7602237508071588c4c75ee7d624f5e07->enter($__internal_881096746c82768192189772e3b0dec7602237508071588c4c75ee7d624f5e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Tableau de bord ";
        
        $__internal_881096746c82768192189772e3b0dec7602237508071588c4c75ee7d624f5e07->leave($__internal_881096746c82768192189772e3b0dec7602237508071588c4c75ee7d624f5e07_prof);

        
        $__internal_905b9ef5cd0e1bede2eaa3494350e84ad44bea4d886f0324a070c5a392a9390e->leave($__internal_905b9ef5cd0e1bede2eaa3494350e84ad44bea4d886f0324a070c5a392a9390e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0272e33c246753e5165608ac73b6c995012504e1b549e4543cb8f7e6eec0fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0272e33c246753e5165608ac73b6c995012504e1b549e4543cb8f7e6eec0fe8->enter($__internal_b0272e33c246753e5165608ac73b6c995012504e1b549e4543cb8f7e6eec0fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81b2cac6202043f38dcfd4916b33c5d2a9e15a273a4a7166462a5c0b9683a1ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b2cac6202043f38dcfd4916b33c5d2a9e15a273a4a7166462a5c0b9683a1ee->enter($__internal_81b2cac6202043f38dcfd4916b33c5d2a9e15a273a4a7166462a5c0b9683a1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_81b2cac6202043f38dcfd4916b33c5d2a9e15a273a4a7166462a5c0b9683a1ee->leave($__internal_81b2cac6202043f38dcfd4916b33c5d2a9e15a273a4a7166462a5c0b9683a1ee_prof);

        
        $__internal_b0272e33c246753e5165608ac73b6c995012504e1b549e4543cb8f7e6eec0fe8->leave($__internal_b0272e33c246753e5165608ac73b6c995012504e1b549e4543cb8f7e6eec0fe8_prof);

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
