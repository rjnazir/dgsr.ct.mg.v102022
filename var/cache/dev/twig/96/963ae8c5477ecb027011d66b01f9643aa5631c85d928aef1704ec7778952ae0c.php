<?php

/* AdminBundle:CtMotifTarif:add.html.twig */
class __TwigTemplate_ce31bfb1a814cbb6fbeced6fe1b663fe9fa6f455c009db4276e748ff7ba735f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtMotifTarif:add.html.twig", 1);
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
        $__internal_b766c13c9f4d7224371afb6584c1c6511dae0103a48991f893d6420f1040c60e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b766c13c9f4d7224371afb6584c1c6511dae0103a48991f893d6420f1040c60e->enter($__internal_b766c13c9f4d7224371afb6584c1c6511dae0103a48991f893d6420f1040c60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotifTarif:add.html.twig"));

        $__internal_8ad40198143d9f22d39028a81f70d34dd3a13ce97ec358eb5b8cc7da86488c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad40198143d9f22d39028a81f70d34dd3a13ce97ec358eb5b8cc7da86488c15->enter($__internal_8ad40198143d9f22d39028a81f70d34dd3a13ce97ec358eb5b8cc7da86488c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotifTarif:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_motif"] = true;
        // line 8
        $context["menu_motif_tarif"] = true;
        // line 9
        $context["menu_motif_tarif_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b766c13c9f4d7224371afb6584c1c6511dae0103a48991f893d6420f1040c60e->leave($__internal_b766c13c9f4d7224371afb6584c1c6511dae0103a48991f893d6420f1040c60e_prof);

        
        $__internal_8ad40198143d9f22d39028a81f70d34dd3a13ce97ec358eb5b8cc7da86488c15->leave($__internal_8ad40198143d9f22d39028a81f70d34dd3a13ce97ec358eb5b8cc7da86488c15_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e859d63f89ab4e62b88235b2b2e5db802d5c043e6cb574fc345d949dfe9482b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e859d63f89ab4e62b88235b2b2e5db802d5c043e6cb574fc345d949dfe9482b->enter($__internal_1e859d63f89ab4e62b88235b2b2e5db802d5c043e6cb574fc345d949dfe9482b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f88bba2268177bcc224fe6685ce73e5b3a1617887279e9600e6c0c9e5a5587c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f88bba2268177bcc224fe6685ce73e5b3a1617887279e9600e6c0c9e5a5587c1->enter($__internal_f88bba2268177bcc224fe6685ce73e5b3a1617887279e9600e6c0c9e5a5587c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Tarif motif ";
        
        $__internal_f88bba2268177bcc224fe6685ce73e5b3a1617887279e9600e6c0c9e5a5587c1->leave($__internal_f88bba2268177bcc224fe6685ce73e5b3a1617887279e9600e6c0c9e5a5587c1_prof);

        
        $__internal_1e859d63f89ab4e62b88235b2b2e5db802d5c043e6cb574fc345d949dfe9482b->leave($__internal_1e859d63f89ab4e62b88235b2b2e5db802d5c043e6cb574fc345d949dfe9482b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e813cf5883b11fddbbf580ee4fddc658cfc9e8bc585bca2f97c90a368a0b569d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e813cf5883b11fddbbf580ee4fddc658cfc9e8bc585bca2f97c90a368a0b569d->enter($__internal_e813cf5883b11fddbbf580ee4fddc658cfc9e8bc585bca2f97c90a368a0b569d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34ba5d20f236f86a6efa465d5efd572b2de01396d8948de8534a0c4afabc4e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ba5d20f236f86a6efa465d5efd572b2de01396d8948de8534a0c4afabc4e43->enter($__internal_34ba5d20f236f86a6efa465d5efd572b2de01396d8948de8534a0c4afabc4e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"callout callout-success\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Ajouter tarif motif</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctMotif", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mtfTrfPrix", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_34ba5d20f236f86a6efa465d5efd572b2de01396d8948de8534a0c4afabc4e43->leave($__internal_34ba5d20f236f86a6efa465d5efd572b2de01396d8948de8534a0c4afabc4e43_prof);

        
        $__internal_e813cf5883b11fddbbf580ee4fddc658cfc9e8bc585bca2f97c90a368a0b569d->leave($__internal_e813cf5883b11fddbbf580ee4fddc658cfc9e8bc585bca2f97c90a368a0b569d_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtMotifTarif:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 43,  139 => 38,  131 => 33,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout Tarif motif {% endblock %}

{% set menu_motif = true %}
{% set menu_motif_tarif = true %}
{% set menu_motif_tarif_create = true %}

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
                        <h3 class=\"box-title\">Ajouter tarif motif</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.ctMotif) }}
                        {{ form_row(form.mtfTrfPrix) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                        <a href=\"{{ path('motif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtMotifTarif:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtMotifTarif/add.html.twig");
    }
}
