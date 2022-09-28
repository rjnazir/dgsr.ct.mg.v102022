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
        $__internal_172eb61f309bbc7247fd7b1c9bec307f88577ccfee1bae97bbf793882a06f21c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_172eb61f309bbc7247fd7b1c9bec307f88577ccfee1bae97bbf793882a06f21c->enter($__internal_172eb61f309bbc7247fd7b1c9bec307f88577ccfee1bae97bbf793882a06f21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotifTarif:add.html.twig"));

        $__internal_a1b18f224c99e99e9e36e715479ce29c52a3167530e7385684c944cc0925e9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b18f224c99e99e9e36e715479ce29c52a3167530e7385684c944cc0925e9f2->enter($__internal_a1b18f224c99e99e9e36e715479ce29c52a3167530e7385684c944cc0925e9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotifTarif:add.html.twig"));

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
        
        $__internal_172eb61f309bbc7247fd7b1c9bec307f88577ccfee1bae97bbf793882a06f21c->leave($__internal_172eb61f309bbc7247fd7b1c9bec307f88577ccfee1bae97bbf793882a06f21c_prof);

        
        $__internal_a1b18f224c99e99e9e36e715479ce29c52a3167530e7385684c944cc0925e9f2->leave($__internal_a1b18f224c99e99e9e36e715479ce29c52a3167530e7385684c944cc0925e9f2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b17ec2e2bda86754e70b3c313a5e7759b608deff65c52036738a0cdce1e20e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b17ec2e2bda86754e70b3c313a5e7759b608deff65c52036738a0cdce1e20e2->enter($__internal_5b17ec2e2bda86754e70b3c313a5e7759b608deff65c52036738a0cdce1e20e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f9b9b5f86d050b899fbdb4dc2c87d43cc103915de2c51c5cb885d8632281f841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b9b5f86d050b899fbdb4dc2c87d43cc103915de2c51c5cb885d8632281f841->enter($__internal_f9b9b5f86d050b899fbdb4dc2c87d43cc103915de2c51c5cb885d8632281f841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Tarif motif ";
        
        $__internal_f9b9b5f86d050b899fbdb4dc2c87d43cc103915de2c51c5cb885d8632281f841->leave($__internal_f9b9b5f86d050b899fbdb4dc2c87d43cc103915de2c51c5cb885d8632281f841_prof);

        
        $__internal_5b17ec2e2bda86754e70b3c313a5e7759b608deff65c52036738a0cdce1e20e2->leave($__internal_5b17ec2e2bda86754e70b3c313a5e7759b608deff65c52036738a0cdce1e20e2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee0bebc6f2833adfbf79c6bc7923c62c99b3618165e61ac42fa0129cd3f8005e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee0bebc6f2833adfbf79c6bc7923c62c99b3618165e61ac42fa0129cd3f8005e->enter($__internal_ee0bebc6f2833adfbf79c6bc7923c62c99b3618165e61ac42fa0129cd3f8005e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b69b6e0c199e10edfece9bcb806e5dd35c4dac5d6813f4f02ec47e6ab76f72b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b69b6e0c199e10edfece9bcb806e5dd35c4dac5d6813f4f02ec47e6ab76f72b->enter($__internal_0b69b6e0c199e10edfece9bcb806e5dd35c4dac5d6813f4f02ec47e6ab76f72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0b69b6e0c199e10edfece9bcb806e5dd35c4dac5d6813f4f02ec47e6ab76f72b->leave($__internal_0b69b6e0c199e10edfece9bcb806e5dd35c4dac5d6813f4f02ec47e6ab76f72b_prof);

        
        $__internal_ee0bebc6f2833adfbf79c6bc7923c62c99b3618165e61ac42fa0129cd3f8005e->leave($__internal_ee0bebc6f2833adfbf79c6bc7923c62c99b3618165e61ac42fa0129cd3f8005e_prof);

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
