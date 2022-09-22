<?php

/* AdminBundle:CtMotif:edit.html.twig */
class __TwigTemplate_7ddacbd3c1b8cae560ee8d0ad99806606d9938bd5027ed805427dc4118994391 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtMotif:edit.html.twig", 1);
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
        $__internal_676f026b3f0c50c6fede1c2c0ed3d31e69e2d0e9004a0eec9f1d3e05261a0bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_676f026b3f0c50c6fede1c2c0ed3d31e69e2d0e9004a0eec9f1d3e05261a0bc6->enter($__internal_676f026b3f0c50c6fede1c2c0ed3d31e69e2d0e9004a0eec9f1d3e05261a0bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotif:edit.html.twig"));

        $__internal_6b44d8077b8c03c208d9550b0dc65cc5289d3dc9a421772fd61916812b23195c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b44d8077b8c03c208d9550b0dc65cc5289d3dc9a421772fd61916812b23195c->enter($__internal_6b44d8077b8c03c208d9550b0dc65cc5289d3dc9a421772fd61916812b23195c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotif:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_motif"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_676f026b3f0c50c6fede1c2c0ed3d31e69e2d0e9004a0eec9f1d3e05261a0bc6->leave($__internal_676f026b3f0c50c6fede1c2c0ed3d31e69e2d0e9004a0eec9f1d3e05261a0bc6_prof);

        
        $__internal_6b44d8077b8c03c208d9550b0dc65cc5289d3dc9a421772fd61916812b23195c->leave($__internal_6b44d8077b8c03c208d9550b0dc65cc5289d3dc9a421772fd61916812b23195c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_461a4d1b2daacacd4cd0b8cc82698458fc165f0cb0bb9bde0ea40262b1f4868d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_461a4d1b2daacacd4cd0b8cc82698458fc165f0cb0bb9bde0ea40262b1f4868d->enter($__internal_461a4d1b2daacacd4cd0b8cc82698458fc165f0cb0bb9bde0ea40262b1f4868d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d16849c075602f1270f70f84b36e5fbcc2067003322bc3b2af2e732c5503f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d16849c075602f1270f70f84b36e5fbcc2067003322bc3b2af2e732c5503f38->enter($__internal_7d16849c075602f1270f70f84b36e5fbcc2067003322bc3b2af2e732c5503f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Motif ";
        
        $__internal_7d16849c075602f1270f70f84b36e5fbcc2067003322bc3b2af2e732c5503f38->leave($__internal_7d16849c075602f1270f70f84b36e5fbcc2067003322bc3b2af2e732c5503f38_prof);

        
        $__internal_461a4d1b2daacacd4cd0b8cc82698458fc165f0cb0bb9bde0ea40262b1f4868d->leave($__internal_461a4d1b2daacacd4cd0b8cc82698458fc165f0cb0bb9bde0ea40262b1f4868d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c00d0a065d60e550d7d1b0d54152d8e5f1a91b668fa2841211dce69d9b828940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c00d0a065d60e550d7d1b0d54152d8e5f1a91b668fa2841211dce69d9b828940->enter($__internal_c00d0a065d60e550d7d1b0d54152d8e5f1a91b668fa2841211dce69d9b828940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc2d50c00bb2ad212f579cd9d82f18e261aa970adbb5bcb74b951af0e988e911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2d50c00bb2ad212f579cd9d82f18e261aa970adbb5bcb74b951af0e988e911->enter($__internal_dc2d50c00bb2ad212f579cd9d82f18e261aa970adbb5bcb74b951af0e988e911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une motif</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "mtfLibelle", array()), 'row');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "mtfIsCalculable", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_motif\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_dc2d50c00bb2ad212f579cd9d82f18e261aa970adbb5bcb74b951af0e988e911->leave($__internal_dc2d50c00bb2ad212f579cd9d82f18e261aa970adbb5bcb74b951af0e988e911_prof);

        
        $__internal_c00d0a065d60e550d7d1b0d54152d8e5f1a91b668fa2841211dce69d9b828940->leave($__internal_c00d0a065d60e550d7d1b0d54152d8e5f1a91b668fa2841211dce69d9b828940_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtMotif:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  135 => 36,  127 => 31,  123 => 30,  114 => 24,  108 => 20,  99 => 17,  96 => 16,  91 => 15,  82 => 12,  79 => 11,  74 => 10,  65 => 9,  46 => 5,  36 => 1,  34 => 7,  32 => 3,  11 => 1,);
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Motif {% endblock %}

{% set menu_motif = true %}

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
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une motif</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.mtfLibelle) }}
                        {{ form_row(edit_form.mtfIsCalculable) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_motif\"/>
                        <a href=\"{{ path('motif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtMotif:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtMotif/edit.html.twig");
    }
}
