<?php

/* @Admin/CtImprimeTech/edit.html.twig */
class __TwigTemplate_29d12d8e57fe64e0397bca0e1764715520db27708196445528ef604edf411292 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtImprimeTech/edit.html.twig", 1);
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
        $__internal_649a9bfd3adab69ba8f9eb0fa92ab9bf7adba12949c15e6b40e3cc3437705065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_649a9bfd3adab69ba8f9eb0fa92ab9bf7adba12949c15e6b40e3cc3437705065->enter($__internal_649a9bfd3adab69ba8f9eb0fa92ab9bf7adba12949c15e6b40e3cc3437705065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTech/edit.html.twig"));

        $__internal_77d6af9f2d0aa442bdbe1cbbbfe840abffbd2dd8304154ea391f2623ee78985c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d6af9f2d0aa442bdbe1cbbbfe840abffbd2dd8304154ea391f2623ee78985c->enter($__internal_77d6af9f2d0aa442bdbe1cbbbfe840abffbd2dd8304154ea391f2623ee78985c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTech/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_imprime_tech"] = true;
        // line 8
        $context["menu_imprime_tech_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_649a9bfd3adab69ba8f9eb0fa92ab9bf7adba12949c15e6b40e3cc3437705065->leave($__internal_649a9bfd3adab69ba8f9eb0fa92ab9bf7adba12949c15e6b40e3cc3437705065_prof);

        
        $__internal_77d6af9f2d0aa442bdbe1cbbbfe840abffbd2dd8304154ea391f2623ee78985c->leave($__internal_77d6af9f2d0aa442bdbe1cbbbfe840abffbd2dd8304154ea391f2623ee78985c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cb7f5737cc5bc42a05137c669ababfe3e85511eef35dac0a431c5225c3637a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cb7f5737cc5bc42a05137c669ababfe3e85511eef35dac0a431c5225c3637a5->enter($__internal_8cb7f5737cc5bc42a05137c669ababfe3e85511eef35dac0a431c5225c3637a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1adcc38b7f9b2ce5d516465008a923a27a71bf8d3843cc58a50410be0e567f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1adcc38b7f9b2ce5d516465008a923a27a71bf8d3843cc58a50410be0e567f75->enter($__internal_1adcc38b7f9b2ce5d516465008a923a27a71bf8d3843cc58a50410be0e567f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification imprimé technique ";
        
        $__internal_1adcc38b7f9b2ce5d516465008a923a27a71bf8d3843cc58a50410be0e567f75->leave($__internal_1adcc38b7f9b2ce5d516465008a923a27a71bf8d3843cc58a50410be0e567f75_prof);

        
        $__internal_8cb7f5737cc5bc42a05137c669ababfe3e85511eef35dac0a431c5225c3637a5->leave($__internal_8cb7f5737cc5bc42a05137c669ababfe3e85511eef35dac0a431c5225c3637a5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d58f906a149e2af075f2b32213713eac72d095972c40d88db632fe5e348a6935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d58f906a149e2af075f2b32213713eac72d095972c40d88db632fe5e348a6935->enter($__internal_d58f906a149e2af075f2b32213713eac72d095972c40d88db632fe5e348a6935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_29678e097e88afe0baa1b1f5f8fd9a490c8348d26002337e471ba666a6f39b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29678e097e88afe0baa1b1f5f8fd9a490c8348d26002337e471ba666a6f39b44->enter($__internal_29678e097e88afe0baa1b1f5f8fd9a490c8348d26002337e471ba666a6f39b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un imprimé technique</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nomImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "abrevImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "uteImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_imprime_tech\"/>
                        <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_29678e097e88afe0baa1b1f5f8fd9a490c8348d26002337e471ba666a6f39b44->leave($__internal_29678e097e88afe0baa1b1f5f8fd9a490c8348d26002337e471ba666a6f39b44_prof);

        
        $__internal_d58f906a149e2af075f2b32213713eac72d095972c40d88db632fe5e348a6935->leave($__internal_d58f906a149e2af075f2b32213713eac72d095972c40d88db632fe5e348a6935_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtImprimeTech/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 49,  147 => 44,  139 => 39,  132 => 35,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification imprimé technique {% endblock %}

{% set menu_imprime_tech        = true %}
{% set menu_imprime_tech_create = true %}

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
                        <h3 class=\"box-title\">Editer un imprimé technique</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.nomImprimeTech) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.abrevImprimeTech) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.uteImprimeTech) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_imprime_tech\"/>
                        <a href=\"{{ path('imprime_tech_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtImprimeTech/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtImprimeTech\\edit.html.twig");
    }
}
