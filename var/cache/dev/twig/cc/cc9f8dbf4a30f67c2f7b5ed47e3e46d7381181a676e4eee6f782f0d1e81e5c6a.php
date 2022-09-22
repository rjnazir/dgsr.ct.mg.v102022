<?php

/* AdminBundle:CtTypeConstatationAvDedouanement:edit.html.twig */
class __TwigTemplate_39b771f523e01f398b81e88fb63a4eea4c15e530001a46486483d847cf674709 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeConstatationAvDedouanement:edit.html.twig", 1);
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
        $__internal_dec99a6ee1ea091657ed0b66b4e2e71358f52991dc38c6b56da5ab42b499dc55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dec99a6ee1ea091657ed0b66b4e2e71358f52991dc38c6b56da5ab42b499dc55->enter($__internal_dec99a6ee1ea091657ed0b66b4e2e71358f52991dc38c6b56da5ab42b499dc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeConstatationAvDedouanement:edit.html.twig"));

        $__internal_a4a681f2b949ef29eb8ae6cc0d51b5a83bfe8e02edbac2934dc8cfda6f318e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a681f2b949ef29eb8ae6cc0d51b5a83bfe8e02edbac2934dc8cfda6f318e2d->enter($__internal_a4a681f2b949ef29eb8ae6cc0d51b5a83bfe8e02edbac2934dc8cfda6f318e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeConstatationAvDedouanement:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_const_av_ded_type"] = true;
        // line 8
        $context["menu_const_av_ded_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dec99a6ee1ea091657ed0b66b4e2e71358f52991dc38c6b56da5ab42b499dc55->leave($__internal_dec99a6ee1ea091657ed0b66b4e2e71358f52991dc38c6b56da5ab42b499dc55_prof);

        
        $__internal_a4a681f2b949ef29eb8ae6cc0d51b5a83bfe8e02edbac2934dc8cfda6f318e2d->leave($__internal_a4a681f2b949ef29eb8ae6cc0d51b5a83bfe8e02edbac2934dc8cfda6f318e2d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ca16229d5762f7cb484eed204be1d5e319d3a45b34798637662eca8151d2b2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ca16229d5762f7cb484eed204be1d5e319d3a45b34798637662eca8151d2b2f->enter($__internal_4ca16229d5762f7cb484eed204be1d5e319d3a45b34798637662eca8151d2b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_93dfba147557fddbe80f577619653965a6b1e40aff63135eb96071b1f4cc0b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93dfba147557fddbe80f577619653965a6b1e40aff63135eb96071b1f4cc0b4c->enter($__internal_93dfba147557fddbe80f577619653965a6b1e40aff63135eb96071b1f4cc0b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type constatation avant dédouanement ";
        
        $__internal_93dfba147557fddbe80f577619653965a6b1e40aff63135eb96071b1f4cc0b4c->leave($__internal_93dfba147557fddbe80f577619653965a6b1e40aff63135eb96071b1f4cc0b4c_prof);

        
        $__internal_4ca16229d5762f7cb484eed204be1d5e319d3a45b34798637662eca8151d2b2f->leave($__internal_4ca16229d5762f7cb484eed204be1d5e319d3a45b34798637662eca8151d2b2f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_27f50f205c2b34fb25a0e0752cd450b30620f9b28ed263c9d2c96994b7654515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27f50f205c2b34fb25a0e0752cd450b30620f9b28ed263c9d2c96994b7654515->enter($__internal_27f50f205c2b34fb25a0e0752cd450b30620f9b28ed263c9d2c96994b7654515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b3246223d623ebd9193544c56c99bd645a6311dff5fc08b632b919814fa2dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b3246223d623ebd9193544c56c99bd645a6311dff5fc08b632b919814fa2dfb->enter($__internal_9b3246223d623ebd9193544c56c99bd645a6311dff5fc08b632b919814fa2dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"box-title\">Editer un type constatation avant dédouanement</h3>
                </div>

                <div class=\"box-body\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadTpLibelle", array()), 'row');
        echo "
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_const_av_ded\"/>
                    <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_const_av_ded_index");
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
        
        $__internal_9b3246223d623ebd9193544c56c99bd645a6311dff5fc08b632b919814fa2dfb->leave($__internal_9b3246223d623ebd9193544c56c99bd645a6311dff5fc08b632b919814fa2dfb_prof);

        
        $__internal_27f50f205c2b34fb25a0e0752cd450b30620f9b28ed263c9d2c96994b7654515->leave($__internal_27f50f205c2b34fb25a0e0752cd450b30620f9b28ed263c9d2c96994b7654515_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeConstatationAvDedouanement:edit.html.twig";
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Type constatation avant dédouanement {% endblock %}

{% set menu_const_av_ded_type        = true %}
{% set menu_const_av_ded_type_create = true %}

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
                    <h3 class=\"box-title\">Editer un type constatation avant dédouanement</h3>
                </div>

                <div class=\"box-body\">
                    {{ form_row(edit_form.cadTpLibelle) }}
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_const_av_ded\"/>
                    <a href=\"{{ path('type_const_av_ded_index') }}\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtTypeConstatationAvDedouanement:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeConstatationAvDedouanement/edit.html.twig");
    }
}
