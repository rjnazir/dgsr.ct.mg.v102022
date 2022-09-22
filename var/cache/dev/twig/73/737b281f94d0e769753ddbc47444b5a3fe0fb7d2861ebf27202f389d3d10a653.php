<?php

/* @Admin/CtDashboard/index.html.twig */
class __TwigTemplate_f6014155135479d3c269e3d55ed17be993f48989b213da809b4740e38fe0960b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtDashboard/index.html.twig", 1);
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
        $__internal_f93218f6fd5bbad24bbfe1c617727b9c8190aeeca8d194a3e6bb86ba3817f39e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93218f6fd5bbad24bbfe1c617727b9c8190aeeca8d194a3e6bb86ba3817f39e->enter($__internal_f93218f6fd5bbad24bbfe1c617727b9c8190aeeca8d194a3e6bb86ba3817f39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtDashboard/index.html.twig"));

        $__internal_9e282b98d2615034419c22401c8a5df89805043e4163fcf90ee11fe83af52ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e282b98d2615034419c22401c8a5df89805043e4163fcf90ee11fe83af52ac0->enter($__internal_9e282b98d2615034419c22401c8a5df89805043e4163fcf90ee11fe83af52ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtDashboard/index.html.twig"));

        // line 5
        $context["menu_dashboard"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f93218f6fd5bbad24bbfe1c617727b9c8190aeeca8d194a3e6bb86ba3817f39e->leave($__internal_f93218f6fd5bbad24bbfe1c617727b9c8190aeeca8d194a3e6bb86ba3817f39e_prof);

        
        $__internal_9e282b98d2615034419c22401c8a5df89805043e4163fcf90ee11fe83af52ac0->leave($__internal_9e282b98d2615034419c22401c8a5df89805043e4163fcf90ee11fe83af52ac0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_414fcc7f13a2aa4335f6b76640fdabbd53385faca3da8128a9e8bf16e8c8ce17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414fcc7f13a2aa4335f6b76640fdabbd53385faca3da8128a9e8bf16e8c8ce17->enter($__internal_414fcc7f13a2aa4335f6b76640fdabbd53385faca3da8128a9e8bf16e8c8ce17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f629c462c71a424887a4443061e227a065e96f316bac8a04f550f8aeeff2bb0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f629c462c71a424887a4443061e227a065e96f316bac8a04f550f8aeeff2bb0d->enter($__internal_f629c462c71a424887a4443061e227a065e96f316bac8a04f550f8aeeff2bb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Tableau de bord ";
        
        $__internal_f629c462c71a424887a4443061e227a065e96f316bac8a04f550f8aeeff2bb0d->leave($__internal_f629c462c71a424887a4443061e227a065e96f316bac8a04f550f8aeeff2bb0d_prof);

        
        $__internal_414fcc7f13a2aa4335f6b76640fdabbd53385faca3da8128a9e8bf16e8c8ce17->leave($__internal_414fcc7f13a2aa4335f6b76640fdabbd53385faca3da8128a9e8bf16e8c8ce17_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c281a02a6b3e8e806ae7f5bcd52b8e81c57cdbe13c1c61e5187db49175415c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c281a02a6b3e8e806ae7f5bcd52b8e81c57cdbe13c1c61e5187db49175415c3->enter($__internal_0c281a02a6b3e8e806ae7f5bcd52b8e81c57cdbe13c1c61e5187db49175415c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e428037f59234a152fcf5bb9c52b6a132c38017cf525a3b0ee5d6fac35bcf75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e428037f59234a152fcf5bb9c52b6a132c38017cf525a3b0ee5d6fac35bcf75->enter($__internal_2e428037f59234a152fcf5bb9c52b6a132c38017cf525a3b0ee5d6fac35bcf75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2e428037f59234a152fcf5bb9c52b6a132c38017cf525a3b0ee5d6fac35bcf75->leave($__internal_2e428037f59234a152fcf5bb9c52b6a132c38017cf525a3b0ee5d6fac35bcf75_prof);

        
        $__internal_0c281a02a6b3e8e806ae7f5bcd52b8e81c57cdbe13c1c61e5187db49175415c3->leave($__internal_0c281a02a6b3e8e806ae7f5bcd52b8e81c57cdbe13c1c61e5187db49175415c3_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtDashboard/index.html.twig";
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
", "@Admin/CtDashboard/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtDashboard\\index.html.twig");
    }
}
