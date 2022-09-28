<?php

/* @Admin/CtProcesVerbal/add.html.twig */
class __TwigTemplate_0cf6cbc48ca912e051c4367abf0f824e059052a192e64e8e4998b10c9c3260de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtProcesVerbal/add.html.twig", 1);
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
        $__internal_131960eadc8eb225a1a8bc223bb47da2f91335ed0629d02a7e26389ff951bc19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_131960eadc8eb225a1a8bc223bb47da2f91335ed0629d02a7e26389ff951bc19->enter($__internal_131960eadc8eb225a1a8bc223bb47da2f91335ed0629d02a7e26389ff951bc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProcesVerbal/add.html.twig"));

        $__internal_c678fe0deed43c475e9c1abe6622ab6094c7de3f1aa7425b3828b10e57f94fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c678fe0deed43c475e9c1abe6622ab6094c7de3f1aa7425b3828b10e57f94fca->enter($__internal_c678fe0deed43c475e9c1abe6622ab6094c7de3f1aa7425b3828b10e57f94fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProcesVerbal/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_proces_verbal"] = true;
        // line 8
        $context["menu_proces_verbal_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_131960eadc8eb225a1a8bc223bb47da2f91335ed0629d02a7e26389ff951bc19->leave($__internal_131960eadc8eb225a1a8bc223bb47da2f91335ed0629d02a7e26389ff951bc19_prof);

        
        $__internal_c678fe0deed43c475e9c1abe6622ab6094c7de3f1aa7425b3828b10e57f94fca->leave($__internal_c678fe0deed43c475e9c1abe6622ab6094c7de3f1aa7425b3828b10e57f94fca_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad827d05ced4f3db041c4df6ed3366b7c965b3740c6770dc22dfddde56ddc487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad827d05ced4f3db041c4df6ed3366b7c965b3740c6770dc22dfddde56ddc487->enter($__internal_ad827d05ced4f3db041c4df6ed3366b7c965b3740c6770dc22dfddde56ddc487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe7889b5a2e318fab6e3379ada4b91edf6b798314ae9c9ad69125eb877343143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7889b5a2e318fab6e3379ada4b91edf6b798314ae9c9ad69125eb877343143->enter($__internal_fe7889b5a2e318fab6e3379ada4b91edf6b798314ae9c9ad69125eb877343143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout proces verbal ";
        
        $__internal_fe7889b5a2e318fab6e3379ada4b91edf6b798314ae9c9ad69125eb877343143->leave($__internal_fe7889b5a2e318fab6e3379ada4b91edf6b798314ae9c9ad69125eb877343143_prof);

        
        $__internal_ad827d05ced4f3db041c4df6ed3366b7c965b3740c6770dc22dfddde56ddc487->leave($__internal_ad827d05ced4f3db041c4df6ed3366b7c965b3740c6770dc22dfddde56ddc487_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e129a64064d6d496c6b0de92886dac72d4c0755cd26041f0b1ec215f7e893501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e129a64064d6d496c6b0de92886dac72d4c0755cd26041f0b1ec215f7e893501->enter($__internal_e129a64064d6d496c6b0de92886dac72d4c0755cd26041f0b1ec215f7e893501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_22f5ff703323213a074c918e99fc05f47b5424e11e0e6d60d88ddfbd379f1df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f5ff703323213a074c918e99fc05f47b5424e11e0e6d60d88ddfbd379f1df6->enter($__internal_22f5ff703323213a074c918e99fc05f47b5424e11e0e6d60d88ddfbd379f1df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un Proces Verbal</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pvType", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pvTarif", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_proces_verbal\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proces_verbal_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_22f5ff703323213a074c918e99fc05f47b5424e11e0e6d60d88ddfbd379f1df6->leave($__internal_22f5ff703323213a074c918e99fc05f47b5424e11e0e6d60d88ddfbd379f1df6_prof);

        
        $__internal_e129a64064d6d496c6b0de92886dac72d4c0755cd26041f0b1ec215f7e893501->leave($__internal_e129a64064d6d496c6b0de92886dac72d4c0755cd26041f0b1ec215f7e893501_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtProcesVerbal/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  137 => 37,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout proces verbal {% endblock %}

{% set menu_proces_verbal           = true %}
{% set menu_proces_verbal_create    = true %}

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
                        <h3 class=\"box-title\">Créer un Proces Verbal</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.pvType) }}
                        {{ form_row(form.pvTarif) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_proces_verbal\"/>
                        <a href=\"{{ path('proces_verbal_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtProcesVerbal/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtProcesVerbal\\add.html.twig");
    }
}
