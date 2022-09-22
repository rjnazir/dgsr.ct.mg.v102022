<?php

/* @Admin/CtTypeVisite/add.html.twig */
class __TwigTemplate_c8520be7110dc809b32b69bc0c13cfb1bc0692cde24cdbd099b305a9c6e9d00b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeVisite/add.html.twig", 1);
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
        $__internal_b0a0aa37fa4ddf7294598210837f48fefe293abc303a9d03665d7239a1a005e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a0aa37fa4ddf7294598210837f48fefe293abc303a9d03665d7239a1a005e7->enter($__internal_b0a0aa37fa4ddf7294598210837f48fefe293abc303a9d03665d7239a1a005e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeVisite/add.html.twig"));

        $__internal_81d96c215cb08bee388d43e01adf40caf9cf9d3f09728eb9fee7e7e59c4e77b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d96c215cb08bee388d43e01adf40caf9cf9d3f09728eb9fee7e7e59c4e77b6->enter($__internal_81d96c215cb08bee388d43e01adf40caf9cf9d3f09728eb9fee7e7e59c4e77b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeVisite/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite"] = true;
        // line 8
        $context["menu_type_visite"] = true;
        // line 9
        $context["menu_type_visite_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0a0aa37fa4ddf7294598210837f48fefe293abc303a9d03665d7239a1a005e7->leave($__internal_b0a0aa37fa4ddf7294598210837f48fefe293abc303a9d03665d7239a1a005e7_prof);

        
        $__internal_81d96c215cb08bee388d43e01adf40caf9cf9d3f09728eb9fee7e7e59c4e77b6->leave($__internal_81d96c215cb08bee388d43e01adf40caf9cf9d3f09728eb9fee7e7e59c4e77b6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_969ad9237bef5c3a6ae4a5a60c181b0a651171ccbabb30e676617c06b1f6915b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_969ad9237bef5c3a6ae4a5a60c181b0a651171ccbabb30e676617c06b1f6915b->enter($__internal_969ad9237bef5c3a6ae4a5a60c181b0a651171ccbabb30e676617c06b1f6915b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_15cdf821c3d397cbaefa52291683ff5a6515f1cdc78e703c4a4f62d32283606c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15cdf821c3d397cbaefa52291683ff5a6515f1cdc78e703c4a4f62d32283606c->enter($__internal_15cdf821c3d397cbaefa52291683ff5a6515f1cdc78e703c4a4f62d32283606c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type de visite ";
        
        $__internal_15cdf821c3d397cbaefa52291683ff5a6515f1cdc78e703c4a4f62d32283606c->leave($__internal_15cdf821c3d397cbaefa52291683ff5a6515f1cdc78e703c4a4f62d32283606c_prof);

        
        $__internal_969ad9237bef5c3a6ae4a5a60c181b0a651171ccbabb30e676617c06b1f6915b->leave($__internal_969ad9237bef5c3a6ae4a5a60c181b0a651171ccbabb30e676617c06b1f6915b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f89d3ba11ad228ca7521ad85455731675bba0520d6a6506b77fcb662756a5e56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f89d3ba11ad228ca7521ad85455731675bba0520d6a6506b77fcb662756a5e56->enter($__internal_f89d3ba11ad228ca7521ad85455731675bba0520d6a6506b77fcb662756a5e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ce785cab2480405a4c0be612e56946ebab141bf75f89e1dfbac1ca80537e829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce785cab2480405a4c0be612e56946ebab141bf75f89e1dfbac1ca80537e829->enter($__internal_3ce785cab2480405a4c0be612e56946ebab141bf75f89e1dfbac1ca80537e829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un type de visite</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tpvLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_visite\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_visite_index");
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
        
        $__internal_3ce785cab2480405a4c0be612e56946ebab141bf75f89e1dfbac1ca80537e829->leave($__internal_3ce785cab2480405a4c0be612e56946ebab141bf75f89e1dfbac1ca80537e829_prof);

        
        $__internal_f89d3ba11ad228ca7521ad85455731675bba0520d6a6506b77fcb662756a5e56->leave($__internal_f89d3ba11ad228ca7521ad85455731675bba0520d6a6506b77fcb662756a5e56_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeVisite/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout Type de visite {% endblock %}

{% set menu_visite             = true %}
{% set menu_type_visite        = true %}
{% set menu_type_visite_create = true %}

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
                        <h3 class=\"box-title\">Créer un type de visite</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.tpvLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_visite\"/>
                        <a href=\"{{ path('type_visite_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeVisite/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeVisite\\add.html.twig");
    }
}
