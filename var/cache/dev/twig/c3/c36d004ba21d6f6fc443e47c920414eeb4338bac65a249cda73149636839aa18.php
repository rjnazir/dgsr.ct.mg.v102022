<?php

/* AdminBundle:CtZoneDeserte:add.html.twig */
class __TwigTemplate_5249a728ffde46b77bad5efd5639ab7df44f3b0a2ce6c100cef08c9d10736338 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtZoneDeserte:add.html.twig", 1);
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
        $__internal_c535dc90c072a6a701eb391979fb00a5d7eab4bfc27068befffc84313c49e4e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c535dc90c072a6a701eb391979fb00a5d7eab4bfc27068befffc84313c49e4e2->enter($__internal_c535dc90c072a6a701eb391979fb00a5d7eab4bfc27068befffc84313c49e4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtZoneDeserte:add.html.twig"));

        $__internal_4d360dd838a84247012336a0ba863a918a986f34d6956ae2f4819313612083f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d360dd838a84247012336a0ba863a918a986f34d6956ae2f4819313612083f9->enter($__internal_4d360dd838a84247012336a0ba863a918a986f34d6956ae2f4819313612083f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtZoneDeserte:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_zone_deserte"] = true;
        // line 8
        $context["menu_zone_deserte_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c535dc90c072a6a701eb391979fb00a5d7eab4bfc27068befffc84313c49e4e2->leave($__internal_c535dc90c072a6a701eb391979fb00a5d7eab4bfc27068befffc84313c49e4e2_prof);

        
        $__internal_4d360dd838a84247012336a0ba863a918a986f34d6956ae2f4819313612083f9->leave($__internal_4d360dd838a84247012336a0ba863a918a986f34d6956ae2f4819313612083f9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_769b05150dbbd05809a3dccaa34b8f0168521bc0fac8cb6050e2b2f721136c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_769b05150dbbd05809a3dccaa34b8f0168521bc0fac8cb6050e2b2f721136c21->enter($__internal_769b05150dbbd05809a3dccaa34b8f0168521bc0fac8cb6050e2b2f721136c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8ca2eb1acca7d92d765c22e8186b739386aab8db946cfbff25843c9b2eaf9677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca2eb1acca7d92d765c22e8186b739386aab8db946cfbff25843c9b2eaf9677->enter($__internal_8ca2eb1acca7d92d765c22e8186b739386aab8db946cfbff25843c9b2eaf9677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Zone de déserte ";
        
        $__internal_8ca2eb1acca7d92d765c22e8186b739386aab8db946cfbff25843c9b2eaf9677->leave($__internal_8ca2eb1acca7d92d765c22e8186b739386aab8db946cfbff25843c9b2eaf9677_prof);

        
        $__internal_769b05150dbbd05809a3dccaa34b8f0168521bc0fac8cb6050e2b2f721136c21->leave($__internal_769b05150dbbd05809a3dccaa34b8f0168521bc0fac8cb6050e2b2f721136c21_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd0d11a01b07bdd1a2a707b676c3156221ad33f5920158ad76fafa4132b50867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd0d11a01b07bdd1a2a707b676c3156221ad33f5920158ad76fafa4132b50867->enter($__internal_fd0d11a01b07bdd1a2a707b676c3156221ad33f5920158ad76fafa4132b50867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_798bea8cdda581e1055d8363eb4ee74cdf8928cb9540c942192cc4d12d263e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_798bea8cdda581e1055d8363eb4ee74cdf8928cb9540c942192cc4d12d263e78->enter($__internal_798bea8cdda581e1055d8363eb4ee74cdf8928cb9540c942192cc4d12d263e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une zone de déserte</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zdLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_zone_deserte\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_798bea8cdda581e1055d8363eb4ee74cdf8928cb9540c942192cc4d12d263e78->leave($__internal_798bea8cdda581e1055d8363eb4ee74cdf8928cb9540c942192cc4d12d263e78_prof);

        
        $__internal_fd0d11a01b07bdd1a2a707b676c3156221ad33f5920158ad76fafa4132b50867->leave($__internal_fd0d11a01b07bdd1a2a707b676c3156221ad33f5920158ad76fafa4132b50867_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtZoneDeserte:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  133 => 36,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout Zone de déserte {% endblock %}

{% set menu_zone_deserte        = true %}
{% set menu_zone_deserte_create = true %}

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

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une zone de déserte</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.zdLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_zone_deserte\"/>
                        <a href=\"{{ path('zone_deserte_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtZoneDeserte:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtZoneDeserte/add.html.twig");
    }
}
